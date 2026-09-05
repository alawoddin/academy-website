<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\InstructorController;
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
Route::prefix('admin')->middleware(['auth' ,IsAdmin::class ])->group(function () {


Route::get('/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
Route::post('/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

Route::controller(FeatureController::class)->group(function() {
    Route::get('all/feature' , 'AllFeature')->name('all.feature');
    Route::get('/add/feature' , 'AddFeature')->name('add.feature');
    Route::post('/store/feature' , 'StoreFeature')->name('store.feature');
    Route::get('/edit/feature/{id}' , 'EditFeature')->name('edit.feature');
    Route::post('/update/feature' , 'UpdateFeature')->name('update.feature');
    // Route::get('/delete/brand/{id}' , 'DeletBrand')->name('delete.brand');

});

});

//End Admin  Route 









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
  