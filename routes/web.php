<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeUserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User2Controller;
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

Route::get('/users/{order}', fn($order) => $order)->where(['order' => 'name|surname|age']);
Route::get('/{year}/{month}/{day}', fn($year, $month, $day) => "$year-$month-$day")->where(['year' => '[0-9]{4}', 'month' => '(0[1-9]|1[0-2])', 'day' => '(0[1-9]|[12][0-9]|3[01])']);
//Route::get('/test/{name}', fn($name) => "Имя юзера: $name");
//Route::get('/test/{num}/{name}', fn($num, $name) => $num . $name)->where(['num1' => '[0-9]+', 'name' => '[a-z]{2,}']);
Route::get('/test/{articles}/{date}', fn($articles, $date) => $articles . ': ' . $date)->where(['articles' => '[a-z]{2,}', 'date' => '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])']);
//Route::get('/test/{name?}', fn($name = 'default Name') => $name);
Route::get('/page/showPage/{page}', [PageController::class, 'show'])->where(['page' => '[0-9]+']);
Route::get('/page/showInput/{inp1}/{inp2}/{inp3}/{style}', [PageController::class, 'showInput'])->where(['inp1' => '[0-9]+', 'inp2' => '[0-9]+', 'inp3' => '[0-9]+', 'style' => '[a-z:]+']);
Route::get('/pages/all', [PageController::class, 'index']);
Route::get('/employee/{employee}', [EmployeeController::class, 'show']);
Route::get('/employees/', [EmployeeController::class, 'index']);
Route::get('/city/{city?}', [CityController::class, 'show']);



Route::get('/categories', [Product2Controller::class, 'showCategoryList']);
Route::get('/product/{category}', [Product2Controller::class, 'showCategory'])->where(['category' => '[0-9]+']);
Route::get('/product/{category}/{product}', [Product2Controller::class, 'show'])->where(['category' => '[0-9]+', 'product' => '[0-9]+']);


Route::get('/test/{num?}', [TestController::class, 'show'])->where(['num' => '[0-9]+']);
Route::match(['get', 'post'], '/test-form', [TestController::class, 'form']);
Route::match(['get', 'post'],'/test/result/{id?}', [TestController::class, 'result']);
Route::get('/test/method/', [TestController::class, 'method']);
Route::get('/test/response', [TestController::class, 'showResponse']);

Route::match(['get', 'post'], '/redirect/show1', [RedirectController::class, 'show1']);
Route::get( '/redirect/show3', [RedirectController::class, 'show3']);
Route::post( '/redirect/form-cookie', [RedirectController::class, 'formCookie']);
Route::get('/redirect/show2/{param1?}/{param2?}', [RedirectController::class, 'show2'])->name('show2');
Route::get('/redirect/show-birthday', [RedirectController::class, 'showBirthday']);
Route::get('/redirect/counter', [RedirectController::class, 'counterCookie']);

Route::get('/showField/{employee}/{field}', [EmployeeController::class, 'showField'])->where(['employee' => '[0-9]+', 'field' => '[a-z]{2,}']);
Route::get('/employee/show/{employee}', [EmployeeController::class, 'show'])->where(['employee' => '[0-9]+']);
Route::get('/employee/showVar/{name}/{surname}/{salary}/{class}', [EmployeeController::class, 'showVar'])->where(['name' => '[A-Za-z]+', 'surname' => '[A-Za-z]+', 'salary' => '[0-9]+']);


Route::get('/products', [ProductController::class, 'index']);
Route::get('/subcategories', [SubCategoryController::class, 'index']);
Route::get('/shop-categories', [ShopCategoryController::class, 'index']);

Route::get('/posts/order/{dir?}', [PostController::class, 'index']);
Route::resources([
  'users' => UserController::class,
  'employeeUsers' => EmployeeUserController::class,
  'posts' => PostController::class,
]);

Route::get('/users2', [User2Controller::class, 'index']);
Route::get('/users2/create', [User2Controller::class, 'insert']);
Route::get('/users2/delete/{id}', [User2Controller::class, 'delete']);
Route::get('/users2/update/{id}', [User2Controller::class, 'update']);
