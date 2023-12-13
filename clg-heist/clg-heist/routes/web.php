<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\ContactController;

use App\Models\profile;
use App\Http\Controllers\ProfileController;

use App\Models\Alumnidetail;
use App\Http\Controllers\AuthController;

use App\Models\admin;
use App\Http\Controllers\AdminController;

use App\Models\Event;
use App\Http\Controllers\EventController;

use App\Models\Blog;
use App\Http\Controllers\BlogController;

use App\Models\Review;
use App\Http\Controllers\ReviewController;

use App\Http\Controllers\PageController;


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

Route::get('/', function () {
    return view('index');
});
Route::get('/',[PageController::class,'index']);

// Route::get('/',[PageController::class,'event']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/about',[PageController::class,'review']);

Route::get('/course', function () {
    return view('course');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact',[ContactController::class,'addData']);

//alumni login/register
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('submit-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::post('submit-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

// alumni dashboard
Route::middleware(['isAlumni'])->group(function(){

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::post('/profile',[ProfileController::class,'addData'])->name('profile');

Route::get('/update_profile/{id}',[ProfileController::class,'profileshow']);
Route::post('/update_profile/{id}',[ProfileController::class,'update']);

 Route::get('/review',[ReviewController::class,'index'])->name('review');
 Route::post('/review',[ReviewController::class,'create'])->name('review');
});


// alumni login/register

// Route::get('/login', function () {
//     return view('login');
// });
// Route::post('/postRegister',[AuthController::class,'registerUser'])->name('postRegister');

// Route::get('/postLogin',[AuthController::class,'loginUser'])->name('postLogin');
// Route::post('/postLogin',[AuthController::class,'loginUser'])->name('postLogin');



// admin

Route::get('/adminregister', function () {
    return view('admin.adminlogin');
});
Route::post('/adminregister',[AdminController::class,'registerAdmin'])->name('adminregister');

Route::get('/adminlogin',[AdminController::class,'loginAdmin'])->name('adminlogin');
Route::post('/adminlogin',[AdminController::class,'loginAdmin'])->name('adminlogin');


Route::get('/admindash', function () {
    return view('admin.index');
});
Route::get('/admindash',[AdminController::class,'show'])->name('admindash');
Route::get('/delete_admin/{id}',[AdminController::class,'destroy']);
Route::get('/edit_admin/{id}',[AdminController::class,'edit']);
Route::post('/update_admin/{id}',[AdminController::class,'update']);

// admin event
Route::get('/create_event', function () {
    return view('admin.event.create_event');
});
Route::post('/create_event',[EventController::class,'store'])->name('create_event');
Route::get('/event',[EventController::class,'show'])->name('event'); //homepage

Route::get('/showevent', function () {
    return view('admin.event.all_event');
});
Route::get('/showevent',[EventController::class,'eventshow'])->name('showevent');
Route::post('/update_event/{id}',[EventController::class,'update']);
Route::get('/edit_event/{id}',[EventController::class,'edit']);
Route::get('/delete_event/{id}',[EventController::class,'destroy']);

//admin alumni
Route::get('/show_contact', function () {
    return view('admin.alumni.show_contact');
});
Route::get('/show_contact',[ContactController::class,'show'])->name('show_contact');
Route::get('/delete/{id}',[ContactController::class,'destroy']);

Route::get('/show_register', function () {
    return view('admin.alumni.show_register');
});
Route::get('/show_register',[AuthController::class,'show'])->name('show_register');
Route::get('/status-update/{id}',[AuthController::class,'status_update']);
Route::get('/delete_register/{id}',[AuthController::class,'destroy']);

Route::get('/show_profile/{id}',[ProfileController::class,'show']);

Route::get('/show_profile', function () {
    return view('admin.alumni.show_profile');
});

// admin blog
Route::get('/create_blog', function () {
    return view('admin.blog.create_blog');
});
Route::post('/create_blog',[BlogController::class,'store'])->name('create_blog');
Route::get('/blog',[BlogController::class,'show'])->name('blog');

Route::get('/show_blog', function () {
    return view('admin.blog.all_blog');
});
Route::get('/show_blog',[BlogController::class,'blogshow'])->name('show_blog');
Route::post('/update_blog/{id}',[BlogController::class,'update']);
Route::get('/edit_blog/{id}',[BlogController::class,'edit']);
Route::get('/delete_blog/{id}',[BlogController::class,'destroy']);

// admin review
Route::get('/show_review',[ReviewController::class,'reviewshow'])->name('show_review');
Route::get('/delete_review/{id}',[ReviewController::class,'destroy']);
// admin logout
Route::post('/adminlogout', [AdminController::class, 'logout'])->name('adminlogout');


//Route::post('/login',[AuthController::class,'registerUser']);
// Route::get('/devo', function () {
//     return view('dev');
// });
// Route::post('/dev',[AuthController::class,'registration']);
