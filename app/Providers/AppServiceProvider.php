<?php

namespace App\Providers;

use App\Models\About;
use App\Models\AboutCard;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Discount;
use App\Models\Feature;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('frontend.section.Banner', function ($view) {
            $view->with('banner', $this->safeFirst(Banner::class, 'banners'));
        });

        View::composer('frontend.section.Features', function ($view) {
            $view->with('features', $this->safeAll(Feature::class, 'features'));
        });

        View::composer('frontend.section.About', function ($view) {
            $view->with('about', $this->safeFirst(About::class, 'abouts'));
            $view->with('aboutCards', $this->safeAll(AboutCard::class, 'about_cards'));
        });

        View::composer('frontend.section.Brands', function ($view) {
            $view->with('brands', $this->safeAll(Brand::class, 'brands'));
        });

        View::composer('frontend.section.Category', function ($view) {
            $categories = $this->safeQuery(function () {
                $withCourses = Category::whereHas('courses')->latest()->get();

                return $withCourses->isNotEmpty() ? $withCourses : Category::latest()->get();
            }, collect());
            $view->with('categories', $categories);
        });

        View::composer('frontend.section.Courses', function ($view) {
            $view->with('courses', $this->safeQuery(fn () => Course::with('category')->latest()->get(), collect()));
        });

        View::composer('frontend.section.Enroll', function ($view) {
            $view->with('courses', $this->safeQuery(fn () => Course::latest()->get(), collect()));
        });

        View::composer('frontend.section.Team', function ($view) {
            $view->with('teams', $this->safeAll(Team::class, 'teams'));
        });

        View::composer('frontend.section.Discount', function ($view) {
            $view->with('discount', $this->safeFirst(Discount::class, 'discounts'));
        });

        View::composer('frontend.section.Testimonials', function ($view) {
            $view->with('testimonials', $this->safeAll(Testimonial::class, 'testimonials'));
        });

        View::composer('frontend.section.Blogs', function ($view) {
            $view->with('blogs', $this->safeAll(Blog::class, 'blogs'));
        });

        View::composer('frontend.section.Contact', function ($view) {
            $view->with('contact', $this->safeFirst(Contact::class, 'contacts'));
        });
    }

    private function safeFirst(string $model, string $table)
    {
        try {
            return Schema::hasTable($table) ? $model::latest()->first() : null;
        } catch (Throwable $e) {
            return null;
        }
    }

    private function safeAll(string $model, string $table)
    {
        try {
            return Schema::hasTable($table) ? $model::latest()->get() : collect();
        } catch (Throwable $e) {
            return collect();
        }
    }

    private function safeQuery(callable $callback, $fallback)
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            return $fallback;
        }
    }
}
