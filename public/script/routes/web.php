<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WorksController;
use App\Http\Controllers\contact\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Home')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
});

Route::namespace('Auth')->group(function(){
    Route::view('/login','auth.login')->name('login')->middleware('guest');
    Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');
    Route::post('/logout',function(){
        return redirect()->to('/login')->with(Auth::logout());
    });
});

//
Route::get('/contact', [ContactController::class, 'postContact'])->name('send.mail');
Route::post('/contact', [ContactController::class, 'postContact'])->name('contact.us.store');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    Route::get('/admin/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::patch('/admin/profile/update/{id}',[AdminController::class,'update'])->name('admin.profile.update');
    Route::get('/admin/settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::patch('/admin/settings/update/{id}', [SettingsController::class, 'update'])->name('settings.update');

    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.delete');

    //Layout
    Route::get('admin/layout/header',[LayoutController::class,'header'])->name('layout.header');
    Route::post('admin/layout/setheader',[LayoutController::class,'setHeader'])->name('layout.setheader');
    Route::get('admin/layout/about',[LayoutController::class,'about'])->name('layout.about');
    Route::post('admin/layout/setabout',[LayoutController::class,'setAbout'])->name('layout.setabout');
    Route::get('admin/layout/footer',[LayoutController::class,'footer'])->name('layout.footer');
    Route::post('admin/layout/setfooter',[LayoutController::class,'setFooter'])->name('m');

    //Crud Resource
    Route::resource('/admin/user',UserController::class);
    Route::resource('/admin/about',AboutController::class);
    Route::resource('/admin/header',HeaderController::class);
    Route::resource('/admin/footer',FooterController::class);
    Route::resource('/admin/works',WorksController::class);
    Route::resource('/admin/skill',SkillController::class);
    Route::resource('/admin/socials', SocialController::class);
    Route::resource('/admin/seo', SeoController::class);
    Route::resource('/admin/services', ServiceController::class);
    Route::resource('/admin/experiences', ExperienceController::class);
    Route::resource('/admin/education', EducationController::class);
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/testimonials', TestimonialController::class);
    Route::resource('/admin/blogs', BlogController::class);
    Route::resource('/admin/counters', CounterController::class);
});
