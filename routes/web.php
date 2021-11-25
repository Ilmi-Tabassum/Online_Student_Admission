<?php

use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\welcomeController;
use App\Models\User;
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
Route::get('/',[welcomeController::class,'record'])->name('welcome');
Route::post('/welcome-std',[welcomeController::class,'addWelcome'])->name('welcome.add');
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/payment', function () {
    return view('exampleEasyCheckout');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/welcomeUsers', function () {
    return view('welcomeUsers');
});
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/employee','App\Http\Controllers\EmployeeController@index');

Route::get('/dashboard','App\Http\Controllers\EmployeeController@index')->name('index');
Route::get('/dashboard-index','App\Http\Controllers\EmployeeController@indexing')->name('indexing');
//Route::get('/thana/{id}','App\Http\Controllers\EmployeeController@get_thana')->name('thana');
//Route::get('/upazila/{id}','App\Http\Controllers\EmployeeController@get_upazila')->name('upazila');
//Route::get('/helper','App\Http\Controllers\divissionController@get_thana')->name('get_thana');
Route::middleware(['auth:sanctum', 'verified'])->get('/welcomeUsers', function () {
    $users = User::all();
    return view('welcomeUsers', compact('users'));
})->name('welcomeUsers');
//Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//    return view('dashboard');
//})->name('home');
Route::get('/delete/{id}','App\Http\Controllers\EmployeeController@delete')->name('delete');
Route::get('/edit/{id}','App\Http\Controllers\EmployeeController@edit')->name('edit');
Route::post('/update','App\Http\Controllers\EmployeeController@update')->name('update');
Route::get('/district','App\Http\Controllers\HomeController@index');
Route::post("/addmember",[EmployeeController::class,'add'])->name('add');

Route::get('/categories','App\Http\Controllers\divissionController@indexing')->name('indexing');
//Route::get('/helper','App\Http\Controllers\divissionController@get_thana')->name('get_thana');
Route::get('/thana/{id}','App\Http\Controllers\divissionController@get_thana')->name('thana');
Route::get('/upazila/{id}','App\Http\Controllers\divissionController@get_upazila')->name('upazila');
Route::get('/name/{id}','App\Http\Controllers\divissionController@get_name')->name('name');
Route::get('/student',[StudentController::class,'record'])->name('student');

Route::post('/add-student',[StudentController::class,'addStudent'])->name('student.add');
Route::get('/student/{id}',[StudentController::class,'getStudentById']);
Route::put('/student',[StudentController::class,'updateStudent'])->name('student.update');
//Route::post('/student/{id}',[StudentController::class,'updateStudent'])->name('student.update');
Route::delete('student-delete/{id}',[StudentController::class,'deleteStudent'])->name('student-delete');
//Route::get('/student',[StudentController::class,'operations'])->name('student-sum');

//Route::get('/product', 'ProductController@index');
//
//
//// Populate Data in Edit Modal Form
//Route::get('product/{product_id?}', 'ProductController@show');
//
//
////create New Product
//Route::post('product', 'ProductController@store');
//
//
//// update Existing Product
//Route::put('product/{product_id}', 'ProductController@update');
//
//
//// delete product
//Route::delete('product/{product_id}', 'ProductController@destroy');

