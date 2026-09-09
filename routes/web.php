<?php

use App\Http\Controllers\Backend\AboutCardController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ContactMessageController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DiscountController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\FaqMessageController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\InstructorController;
use App\Http\Controllers\Backend\JoinApplicationController;
use App\Http\Controllers\Backend\JoinController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\PageController;
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

Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/course-detail/{id?}', 'courseDetail')->name('course.detail');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-grid-left', 'blogGridLeft')->name('blog.grid.left');
    Route::get('/blog-grid-right', 'blogGridRight')->name('blog.grid.right');
    Route::get('/blog-list-left', 'blogListLeft')->name('blog.list.left');
    Route::get('/blog-list-right', 'blogListRight')->name('blog.list.right');
    Route::get('/blog-detail/{id?}', 'blogDetail')->name('blog.detail');
    Route::get('/team', 'team')->name('team');
    Route::get('/team-detail/{id?}', 'teamDetail')->name('team.detail');
    Route::get('/join', 'join')->name('join');
    Route::post('/join', 'joinApply')->name('join.apply');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/faq', 'faq')->name('faq');
    Route::post('/faq', 'faqAsk')->name('faq.ask');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactSend')->name('contact.send');
    Route::get('/home-2', 'homeTwo')->name('home.two');
});

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

    Route::controller(FaqController::class)->group(function () {
        Route::get('all/faq', 'AllFaq')->name('all.faq');
        Route::get('/add/faq', 'AddFaq')->name('add.faq');
        Route::post('/store/faq', 'StoreFaq')->name('store.faq');
        Route::get('/edit/faq/{id}', 'EditFaq')->name('edit.faq');
        Route::post('/update/faq', 'UpdateFaq')->name('update.faq');
        Route::get('/delete/faq/{id}', 'DeleteFaq')->name('delete.faq');
    });

    Route::controller(GalleryController::class)->group(function () {
        Route::get('all/gallery', 'AllGallery')->name('all.gallery');
        Route::get('/add/gallery', 'AddGallery')->name('add.gallery');
        Route::post('/store/gallery', 'StoreGallery')->name('store.gallery');
        Route::get('/edit/gallery/{id}', 'EditGallery')->name('edit.gallery');
        Route::post('/update/gallery', 'UpdateGallery')->name('update.gallery');
        Route::get('/delete/gallery/{id}', 'DeleteGallery')->name('delete.gallery');
    });

    Route::controller(JoinController::class)->group(function () {
        Route::get('all/join', 'AllJoin')->name('all.join');
        Route::get('/add/join', 'AddJoin')->name('add.join');
        Route::post('/store/join', 'StoreJoin')->name('store.join');
        Route::get('/edit/join/{id}', 'EditJoin')->name('edit.join');
        Route::post('/update/join', 'UpdateJoin')->name('update.join');
        Route::get('/delete/join/{id}', 'DeleteJoin')->name('delete.join');
    });

    Route::controller(JoinApplicationController::class)->group(function () {
        Route::get('all/join/application', 'AllJoinApplication')->name('all.join.application');
        Route::get('/delete/join/application/{id}', 'DeleteJoinApplication')->name('delete.join.application');
    });

    Route::controller(ContactMessageController::class)->group(function () {
        Route::get('all/contact/message', 'AllContactMessage')->name('all.contact.message');
        Route::get('/delete/contact/message/{id}', 'DeleteContactMessage')->name('delete.contact.message');
    });

    Route::controller(FaqMessageController::class)->group(function () {
        Route::get('all/faq/message', 'AllFaqMessage')->name('all.faq.message');
        Route::get('/delete/faq/message/{id}', 'DeleteFaqMessage')->name('delete.faq.message');
    });
});

//End Admin  Route 









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
