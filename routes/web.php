<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
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

//'name', 'surname' или 'age'

Route::get('/users/{order}', fn($order) => $order)->where(['order' => 'name|surname|age']);
Route::get('/{year}/{month}/{day}', fn($year, $month, $day) => "$year-$month-$day")->where(['year' => '[0-9]{4}', 'month' => '(0[1-9]|1[0-2])', 'day' => '(0[1-9]|[12][0-9]|3[01])']);
//Route::get('/test/{name}', fn($name) => "Имя юзера: $name");
//Route::get('/test/{num}/{name}', fn($num, $name) => $num . $name)->where(['num1' => '[0-9]+', 'name' => '[a-z]{2,}']);
Route::get('/test/{articles}/{date}', fn($articles, $date) => $articles . ': ' . $date)->where(['articles' => '[a-z]{2,}', 'date' => '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])']);
//Route::get('/test/{name?}', fn($name = 'default Name') => $name);
Route::get('/page/showPage', [PageController::class, 'show']);



Route::get('/products', [ProductController::class, 'index']);
Route::get('/subcategories', [SubCategoryController::class, 'index']);
Route::get('/shop-categories', [ShopCategoryController::class, 'index']);


Route::resources([
  'users' => UserController::class,
]);
