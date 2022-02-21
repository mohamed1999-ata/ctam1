<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\contactadmincontroller;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\usercontroller;
use App\Http\Controllers\backend\FormationController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\InscreptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController ;

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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

Route::get('/', [TestController::class , 'index2']);




Route::get('/admin' , [AdminController::class , 'index']);

Route::controller(contactadmincontroller::class)->group(function () {
    Route::get('/admin/contacts' , 'index');
    Route::delete('/admin/deletecontact/{id}' ,'destroy');
    
});
/*
Route::controller(usercontroller::class)->group(function () {
    Route::get('/admin/users' , 'index');
    Route::get('/admin/adduser' , 'index1');
    Route::post('/admin/user/add', 'store');
    Route::get('/admin/edituser/{user}' ,'edit');
    Route::delete('/admin/user/delete/{id}' ,'destroy');
    
});*/

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact' , 'index');
    Route::post('/addcontact', 'store');
    
  
});
//Route::post('/contacts', [ContactController::class , 'store']);

/// post route 

Route::controller(PostController::class)->group(function () {
    Route::get('admin/addpost' , 'addpost');
    Route::get('/admin/edit/{post}' , 'edit');
});
Route::resource("admin/posts", PostController::class);



///end post route 
////formtion start 



Route::controller(FormationController::class)->group(function () {
    Route::get('admin/addformation' , 'index2');
    Route::get('formations/{formation}/edit ' , 'edit');
    
});

Route::get('/formation' , [TestController::class , 'index'] ) ;


////end formation 


/////spatie  

Route::group(['middleware' => ['auth','can:admin']], function() {

    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', usercontroller::class);
    Route::get('/admin' , [AdminController::class , 'index']);
      
    
});
Route::group(['middleware' => ['auth']], function() {
Route::resource("admin/formations" , FormationController::class);
Route::get('/formation/{id}' ,[TestController::class , 'show'] );
});

Route::post('/inscription',[InscreptionController::class , 'store']);
Route::resource('admin/inscreptions', InscreptionController::class);
Route::post('/admin/media/{id}', [InscreptionController::class , 'completedUpdate'])->name('completedUpdate');


Route::get('/admin/recherche' ,[InscreptionController::class ,  'rech']);

/////end spatie
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});