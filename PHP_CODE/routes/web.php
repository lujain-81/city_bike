<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\EmployyAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\EmployeeController;
use App\Http\Controllers\Auth\PanelLoginController;
use App\Http\Controllers\Panel\AdminController;
use App\Http\Controllers\Panel\CustomerController;
use App\Http\Controllers\Panel\SpotController;
use App\Http\Controllers\Panel\VehicleController;
use App\Http\Controllers\Panel\FeedbackController;
use App\Http\Controllers\Panel\ContactUsController;
use App\Http\Controllers\Panel\RentalController;
use App\Http\Controllers\Panel\ReportController;
use App\Http\Controllers\Panel\CompanyInformationController;

use App\Http\Controllers\Emp\HomeController as EmpHomeController;

use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\CartController;


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

Route::get('/panel/login', [PanelLoginController::class, 'getForm'])->name('panel.login');
Route::post('/panel/login', [PanelLoginController::class, 'postForm'])->name('panel.login.post');


Route::get('/employees/login', [EmployyAuthController::class, 'getForm'])->name('employees.login');
Route::post('/employees/login', [EmployyAuthController::class, 'postForm'])->name('employees.login.post');


Route::group(['prefix'=>'panel','as'=>'panel.', 'middleware' => ['auth:web']], function(){
    Route::post('/panel/logout', [PanelLoginController::class, 'logout'])->name('logout');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('main');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('admins', AdminController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('spots', SpotController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::resource('contact-us', ContactUsController::class)->only('index', 'destroy', 'store', 'show');
    Route::resource('feedback', FeedbackController::class)->only('index', 'destroy');
    Route::resource('rentals', RentalController::class)->only('index', 'show');
    Route::post('rentals/{rental}/cancel', [RentalController::class, 'cancel'])->name('rentals.cancel');
    Route::post('feedback/change/status', [FeedbackController::class, 'changeStatus'])->name('feedback.changeStatus');

    Route::get('/reports/rentals-spots', [ReportController::class, 'spots'])->name('reports.spots');
    Route::get('/reports/rentals-vehicles', [ReportController::class, 'vehicles'])->name('reports.vehicles');
    Route::get('/reports/customer-val', [ReportController::class, 'customers'])->name('reports.customers');

    Route::resource('company-information', CompanyInformationController::class)->only('index', 'update');

    });


Route::group(['prefix'=>'employees','as'=>'employees.', 'middleware' => ['auth:employees']], function(){
    Route::post('/logout', [EmployyAuthController::class, 'logout'])->name('logout');

    Route::get('/home', [EmpHomeController::class, 'index'])->name('home');
    Route::get('/', [EmpHomeController::class, 'index'])->name('main');
    Route::get('/dashboard', [EmpHomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('vehicles', VehicleController::class);
    Route::resource('contact-us', ContactUsController::class)->only('index', 'destroy', 'store', 'show');

});


//password resets
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['middleware' => ['guest:customers']], function(){
    Route::get('/forget-password', [CustomerAuthController::class, 'getForgetForm'])->name('user.forget');
    Route::post('/forget-password', [CustomerAuthController::class, 'postForgetForm'])->name('user.forget.post');
    Route::get('/reset-password', [CustomerAuthController::class, 'getResetForm'])->name('user.reset');
    Route::post('/reset-password', [CustomerAuthController::class, 'postResetForm'])->name('user.reset.post');
    Route::get('/login', [CustomerAuthController::class, 'getForm'])->name('user.login');
    Route::post('/login', [CustomerAuthController::class, 'postForm'])->name('user.login.post');

    Route::get('/register', [CustomerAuthController::class, 'getRegisterForm'])->name('user.register');
    Route::post('/register', [CustomerAuthController::class, 'postRegisterForm'])->name('user.register.post');
});
Route::group(['middleware' => ['auth:customers']], function(){
    Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('user.logout');

    Route::post('/vehicles/{vehicle}', [AccountController::class, 'book'])->name('user.vehicle.book');

    Route::get('/vehicles/{vehicle}/book-now', [UserHomeController::class, 'book'])->name('user.book');

    Route::get('/account', [AccountController::class, 'index'])->name('user.account');
    Route::post('/account', [AccountController::class, 'update'])->name('user.account.update');

    Route::get('/account/rentals', [AccountController::class, 'rentals'])->name('user.account.rentals');
    Route::get('/account/rental/{rental}', [AccountController::class, 'rental'])->name('user.account.rental');
    Route::post('/account/rental/{rental}/cancel', [AccountController::class, 'cancel'])->name('user.account.rental.cancel');
    Route::post('/account/review/{rental}', [AccountController::class, 'review'])->name('user.account.review');
    Route::get('/account/reviews', [AccountController::class, 'reviews'])->name('user.account.reviews');
    Route::get('/account/contacts', [AccountController::class, 'contacts'])->name('user.account.contacts');
    Route::get('/account/contacts/{contact}', [AccountController::class, 'contact'])->name('user.account.contact');
    Route::get('/account/contacts/add/new', [AccountController::class, 'getAddContact'])->name('user.account.contact.add');
    Route::post('/account/contacts', [AccountController::class, 'addContact'])->name('user.account.contact.store');

    Route::post('/checkout/now', [CartController::class, 'checkout'])->name('user.checkout');


});

Route::get('/checkout', [CartController::class, 'index'])->name('user.checkout.index');
Route::get('/cart/{vehicle}', [CartController::class, 'add'])->name('user.cart.add');
Route::get('/cart/{row}/remove', [CartController::class, 'remove'])->name('user.cart.remove');
Route::get('/vehicles', [UserHomeController::class, 'vehicles'])->name('user.vehicles');
Route::get('/vehicles/{vehicle}', [UserHomeController::class, 'vehicle'])->name('user.vehicle');
Route::get('/spots', [UserHomeController::class, 'spots'])->name('user.spots');
Route::get('/home', [UserHomeController::class, 'index'])->name('user.home');
Route::get('/', [UserHomeController::class, 'index'])->name('user.index');
