<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;     
use App\Http\Controllers\CompaniesController;       
use App\Http\Controllers\EmployeesController;

	Route::get('/', function () {
		return redirect('/dashboard');
	})->middleware('auth');

	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('companies', [CompaniesController::class, 'index'])->name('companies-index');
	Route::get('companies-create', [CompaniesController::class, 'create'])->name('companies-create');
	Route::post('companies-create', [CompaniesController::class, 'store'])->name('companies-store');
	Route::get('companies-update', [CompaniesController::class, 'edit'])->name('companies-edit');
	Route::Post('companies-update', [CompaniesController::class, 'update'])->name('companies-update');
	Route::get('companies-delete', [CompaniesController::class, 'delete'])->name('companies-delete');
	Route::get('companies-pdf', [CompaniesController::class, 'pdf'])->name('companies-pdf');
	Route::get('companies-excel', [CompaniesController::class, 'excel'])->name('companies-excel');

	Route::get('employees', [EmployeesController::class, 'index'])->name('employees-index');
	Route::get('employees-listcomapany', [EmployeesController::class, 'listCompany'])->name('employees-listcomapany');
	Route::get('employees-create', [EmployeesController::class, 'create'])->name('employees-create');
	Route::post('employees-create', [EmployeesController::class, 'store'])->name('employees-store');
	Route::get('employees-update', [EmployeesController::class, 'edit'])->name('employees-edit');
	Route::post('employees-update', [EmployeesController::class, 'update'])->name('employees-update');
	Route::get('employees-delete', [EmployeesController::class, 'delete'])->name('employees-delete');

	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('companies', [CompaniesController::class, 'index'])->name('companies-index');
});