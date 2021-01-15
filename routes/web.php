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
Route::get('/info_user', [Admin_userController::class, 'infoView']);

Route::get('/list_member_cv', [Admin_membercvController::class, 'index']);
Route::get('/add_member_cv', [Admin_membercvController::class, 'addView']);

Route::get('/list_education', [Admin_educationController::class, 'index']);
Route::get('/add_education', [Admin_educationController::class, 'addView']);

Route::get('/list_experience', [Admin_experienceController::class, 'index']);
Route::get('/add_experience', [Admin_experienceController::class, 'addView']);

Route::get('/list_thank_letter', [Admin_thank_letterController::class, 'index']);
Route::get('/add_thank_letter', [Admin_thank_letterController::class, 'addView']);

Route::get('/list_banner', [Admin_bannerController::class, 'index']);
Route::get('/add_banner', [Admin_bannerController::class, 'addView']);