<?php

use App\Http\Controllers\Backend\AboutCardController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DiscountController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\InstructorController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::middleware('auth')->get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('instructor.dashboard');
})->name('dashboard');

///Instructor Route
Route::prefix('instructor')->middleware(['auth', IsUser::class])->group(function () {

    Route::get('/dashboard', function () {
        return view('instructor.index');
    })->name('instructor.dashboard');

    Route::get('/logout', [InstructorController::class, 'InstructorLogout'])->name('instructor.logout');
    Route::get('/profile', [InstructorController::class, 'InstructorProfile'])->name('instructor.profile');
    Route::post('/profile/store', [InstructorController::class, 'InstructorProfileStore'])->name('instructor.profile.store');
    Route::get('/change/password', [InstructorController::class, 'InstructorChangePassword'])->name('instructor.change.password');
    Route::post('/password/update', [InstructorController::class, 'InstructorPasswordUpdate'])->name('instructor.password.update');
});

//End Instructor Route

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/courses', function () {
    return view('frontend.pages.courses');
})->name('courses');

Route::get('/course-detail', function () {
    return view('frontend.pages.course-detail');
})->name('course.detail');

Route::get('/blog', function () {
    return view('frontend.pages.blog-grid');
})->name('blog');

Route::get('/blog-grid-left', function () {
    return view('frontend.pages.blog-grid-left');
})->name('blog.grid.left');

Route::get('/blog-grid-right', function () {
    return view('frontend.pages.blog-grid-right');
})->name('blog.grid.right');

Route::get('/blog-list-left', function () {
    return view('frontend.pages.blog-list-left');
})->name('blog.list.left');

Route::get('/blog-list-right', function () {
    return view('frontend.pages.blog-list-right');
})->name('blog.list.right');

Route::get('/blog-detail', function () {
    return view('frontend.pages.blog-detail');
})->name('blog.detail');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('team');

Route::get('/team-detail', function () {
    return view('frontend.pages.team-detail');
})->name('team.detail');

Route::get('/join', function () {
    return view('frontend.pages.join');
})->name('join');

Route::get('/gallery', function () {
    return view('frontend.pages.gallery');
})->name('gallery');

Route::get('/faq', function () {
    return view('frontend.pages.faq');
})->name('faq');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/home-2', function () {
    return view('frontend.pages.home-2');
})->name('home.two');

//End User Route

///Admin Route
Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {


    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

    Route::controller(FeatureController::class)->group(function () {
        Route::get('all/feature', 'AllFeature')->name('all.feature');
        Route::get('/add/feature', 'AddFeature')->name('add.feature');
        Route::post('/store/feature', 'StoreFeature')->name('store.feature');
        Route::get('/edit/feature/{id}', 'EditFeature')->name('edit.feature');
        Route::post('/update/feature', 'UpdateFeature')->name('update.feature');
        Route::get('/delete/feature/{id}', 'DeleteFeature')->name('delete.feature');
    });

    Route::controller(BannerController::class)->group(function () {
        Route::get('all/banner', 'AllBanner')->name('all.banner');
        Route::get('/add/banner', 'AddBanner')->name('add.banner');
        Route::post('/store/banner', 'StoreBanner')->name('store.banner');
        Route::get('/edit/banner/{id}', 'EditBanner')->name('edit.banner');
        Route::post('/update/banner', 'UpdateBanner')->name('update.banner');
        Route::get('/delete/banner/{id}', 'DeleteBanner')->name('delete.banner');
    });

    Route::controller(AboutController::class)->group(function () {
        Route::get('all/about', 'AllAbout')->name('all.about');
        Route::get('/add/about', 'AddAbout')->name('add.about');
        Route::post('/store/about', 'StoreAbout')->name('store.about');
        Route::get('/edit/about/{id}', 'EditAbout')->name('edit.about');
        Route::post('/update/about', 'UpdateAbout')->name('update.about');
        Route::get('/delete/about/{id}', 'DeleteAbout')->name('delete.about');
    });

    Route::controller(AboutCardController::class)->group(function () {
        Route::get('all/aboutcard', 'AllAboutCard')->name('all.aboutcard');
        Route::get('/add/aboutcard', 'AddAboutCard')->name('add.aboutcard');
        Route::post('/store/aboutcard', 'StoreAboutCard')->name('store.aboutcard');
        Route::get('/edit/aboutcard/{id}', 'EditAboutCard')->name('edit.aboutcard');
        Route::post('/update/aboutcard', 'UpdateAboutCard')->name('update.aboutcard');
        Route::get('/delete/aboutcard/{id}', 'DeleteAboutCard')->name('delete.aboutcard');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('all/brand', 'AllBrand')->name('all.brand');
        Route::get('/add/brand', 'AddBrand')->name('add.brand');
        Route::post('/store/brand', 'StoreBrand')->name('store.brand');
        Route::get('/edit/brand/{id}', 'EditBrand')->name('edit.brand');
        Route::post('/update/brand', 'UpdateBrand')->name('update.brand');
        Route::get('/delete/brand/{id}', 'DeleteBrand')->name('delete.brand');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    Route::controller(CourseController::class)->group(function () {
        Route::get('all/course', 'AllCourse')->name('all.course');
        Route::get('/add/course', 'AddCourse')->name('add.course');
        Route::post('/store/course', 'StoreCourse')->name('store.course');
        Route::get('/edit/course/{id}', 'EditCourse')->name('edit.course');
        Route::post('/update/course', 'UpdateCourse')->name('update.course');
        Route::get('/delete/course/{id}', 'DeleteCourse')->name('delete.course');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('all/team', 'AllTeam')->name('all.team');
        Route::get('/add/team', 'AddTeam')->name('add.team');
        Route::post('/store/team', 'StoreTeam')->name('store.team');
        Route::get('/edit/team/{id}', 'EditTeam')->name('edit.team');
        Route::post('/update/team', 'UpdateTeam')->name('update.team');
        Route::get('/delete/team/{id}', 'DeleteTeam')->name('delete.team');
    });

    Route::controller(DiscountController::class)->group(function () {
        Route::get('all/discount', 'AllDiscount')->name('all.discount');
        Route::get('/add/discount', 'AddDiscount')->name('add.discount');
        Route::post('/store/discount', 'StoreDiscount')->name('store.discount');
        Route::get('/edit/discount/{id}', 'EditDiscount')->name('edit.discount');
        Route::post('/update/discount', 'UpdateDiscount')->name('update.discount');
        Route::get('/delete/discount/{id}', 'DeleteDiscount')->name('delete.discount');
    });

    Route::controller(TestimonialController::class)->group(function () {
        Route::get('all/testimonial', 'AllTestimonial')->name('all.testimonial');
        Route::get('/add/testimonial', 'AddTestimonial')->name('add.testimonial');
        Route::post('/store/testimonial', 'StoreTestimonial')->name('store.testimonial');
        Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
        Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
        Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('all/blog', 'AllBlog')->name('all.blog');
        Route::get('/add/blog', 'AddBlog')->name('add.blog');
        Route::post('/store/blog', 'StoreBlog')->name('store.blog');
        Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
        Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
        Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('all/contact', 'AllContact')->name('all.contact');
        Route::get('/add/contact', 'AddContact')->name('add.contact');
        Route::post('/store/contact', 'StoreContact')->name('store.contact');
        Route::get('/edit/contact/{id}', 'EditContact')->name('edit.contact');
        Route::post('/update/contact', 'UpdateContact')->name('update.contact');
        Route::get('/delete/contact/{id}', 'DeleteContact')->name('delete.contact');
    });
});

//End Admin  Route 









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
