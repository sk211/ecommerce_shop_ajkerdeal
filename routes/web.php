<?php
use Illuminate\Support\Facades\Route;
use App\Categores;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/', function (){
//     return "hello world";
// });



Route::get('/', 'FrontController@index');

Route::get('/about', 'FrontController@about');
Route::get('/single', 'FrontController@single');
Route::get('/shop', 'FrontController@shop');
// Route::get('/admin', 'FrontController@admin');
Route::get('/seller', 'FrontController@seller');
Route::get('/service', 'FrontController@service');
Route::get('/checkout', 'FrontController@checkout');
Route::get('/seller', 'FrontController@seller');
Route::get('/4o4', 'FrontController@4o4');
Route::get('/payment', 'FrontController@payment');
Route::get('/contract', 'FrontController@contact');


// roust for Dashbord



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// add categories route


Route::get('/allcates', 'AllCategory@index');
Route::get('/profile', 'UserController@index');
Route::get('/addCates', 'UserController@addcate');
Route::post('/addCates', 'AddController2@store')->name('store');



