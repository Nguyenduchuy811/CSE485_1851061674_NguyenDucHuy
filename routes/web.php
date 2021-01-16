<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin_userController;
use App\Http\Controllers\Admin_membercvController;
use App\Http\Controllers\Admin_educationController;
use App\Http\Controllers\Admin_experienceController;
use App\Http\Controllers\Admin_bannerController;
use App\Http\Controllers\Admin_thank_letterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/loginaction', [LoginController::class, 'loginAction']);
Route::get('/logoutaction', [LoginController::class, 'logoutAction']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/list_user', [Admin_userController::class, 'index']);
Route::get('/add_user', [Admin_userController::class, 'addView']);
Route::post('/add_user_action', [Admin_userController::class, 'addAction']);
Route::get('/delete_user', [Admin_userController::class, 'deleteAction']);
Route::get('/edit_user', [Admin_userController::class, 'editView']);
Route::post('/edit_user_action', [Admin_userController::class, 'editAction']);
Route::get('/info_user', [Admin_userController::class, 'infoView']);

Route::get('/list_member_cv', [Admin_membercvController::class, 'index']);
Route::get('/add_member_cv', [Admin_membercvController::class, 'addView']);
Route::post('/add_member_cv_action', [Admin_membercvController::class, 'addAction']);
Route::get('/delete_member_cv', [Admin_membercvController::class, 'deleteAction']);
Route::get('/edit_member_cv', [Admin_membercvController::class, 'editView']);
Route::post('/edit_member_cv_action', [Admin_membercvController::class, 'editAction']);
Route::get('/info_member_cv', [Admin_membercvController::class, 'infoView']);

Route::get('/list_education', [Admin_educationController::class, 'index']);
Route::get('/add_education', [Admin_educationController::class, 'addView']);
Route::post('/add_education_action', [Admin_educationController::class, 'addAction']);
Route::get('/delete_education', [Admin_educationController::class, 'deleteAction']);
Route::get('/edit_education', [Admin_educationController::class, 'editView']);
Route::post('/edit_education_action', [Admin_educationController::class, 'editAction']);
Route::get('/info_education', [Admin_educationController::class, 'infoView']);


Route::get('/list_experience', [Admin_experienceController::class, 'index']);
Route::get('/add_experience', [Admin_experienceController::class, 'addView']);
Route::post('/add_experience_action', [Admin_experienceController::class, 'addAction']);
Route::get('/delete_experience', [Admin_experienceController::class, 'deleteAction']);
Route::get('/edit_experience', [Admin_experienceController::class, 'editView']);
Route::post('/edit_experience_action', [Admin_experienceController::class, 'editAction']);
Route::get('/info_experience', [Admin_experienceController::class, 'infoView']);

Route::get('/list_thank_letter', [Admin_thank_letterController::class, 'index']);
Route::get('/add_thank_letter', [Admin_thank_letterController::class, 'addView']);
Route::post('/add_thank_letter_action', [Admin_thank_letterController::class, 'addAction']);
Route::get('/delete_thank_letter', [Admin_thank_letterController::class, 'deleteAction']);
Route::get('/edit_thank_letter', [Admin_thank_letterController::class, 'editView']);
Route::get('/info_thank_letter', [Admin_thank_letterController::class, 'infoView']);

Route::get('/list_banner', [Admin_bannerController::class, 'index']);
Route::get('/add_banner', [Admin_bannerController::class, 'addView']);
Route::post('/add_banner_action', [Admin_bannerController::class, 'addAction']);
Route::get('/delete_banner', [Admin_bannerController::class, 'deleteAction']);
Route::get('/edit_banner', [Admin_bannerController::class, 'editView']);
Route::get('/info_banner', [Admin_bannerController::class, 'infoView']);

