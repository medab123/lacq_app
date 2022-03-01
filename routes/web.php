<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\MatriceController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LieuController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\DashboardAdminController;

use Illuminate\Support\Facades\Auth;





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
Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);

Route::group(['middleware' => ['auth']], function() {
    //
    Route::post('/users/update', [userController::class,'update']);
    Route::get('/users/edit', function(){
        return view("users/edit");
    });
    Route::group(['middleware' => ['is_admin']], function() {
        Route::resource('/users',userController::class);
    });
    /////////////////////////////////////////////////////////////////////////////////
    Route::get('/menus', [MenuController::class,'index']);
    Route::get('/menus/create', [MenuController::class,'create'])->middleware('is_responsable');
    Route::post('/menus', [MenuController::class,'store'])->middleware('is_responsable');
    Route::get('/menus/{id}/edit', [MenuController::class,'edit'])->middleware('is_responsable');
    Route::PATCH('/menus/{id}', [MenuController::class,'update'])->middleware('is_responsable');
    Route::DELETE('/menus/{id}', [MenuController::class,'destroy'])->middleware('is_responsable');
                                ////////////////////////////
    Route::post('/menus/search/',[MenuController::class,'search']);
    //////////////////////////////////////////////////////////////////////////////
    Route::get('/matrices', [MatriceController::class,'index']);
    Route::get('/matrices/create', [MatriceController::class,'create'])->middleware('is_responsable');
    Route::post('/matrices', [MatriceController::class,'store'])->middleware('is_responsable');
    Route::get('/matrices/{id}/edit', [MatriceController::class,'edit'])->middleware('is_responsable');
    Route::PATCH('/matrices/{id}', [MatriceController::class,'update'])->middleware('is_responsable');
    Route::DELETE('/matrices/{id}', [MatriceController::class,'destroy'])->middleware('is_responsable');
                                ////////////////////////////
    Route::post('/matrices/search/',[MatriceController::class,'search']);
    /////////////////////////////////////////////////////////////////////////////
    Route::DELETE('/commandes/{id}', [CommandeController::class,'destroy'])->middleware('is_admin');
                        //////////////////////////////////////////
    Route::get('/commandes/json', [CommandeController::class,'json']);
    Route::post('/commandes/search/',[CommandeController::class,'search']);
    Route::get('/commandes/commantaire/{commande_id}',[CommandeController::class,'getCommantaire']);
    Route::post('/commandes/reject',[CommandeController::class,'reject'])->middleware('is_responsable');
    Route::get('/commandes/search/{state}',[CommandeController::class,'getCommandesWhereState']);
    Route::get('/commandes/{id}/valider',[CommandeController::class,'valider'])->middleware('is_responsable');
    Route::get('/commandes/{matrice_is}/menuOfMatrice',[CommandeController::class,'menuOfMatrice']);
    Route::resource('/commandes',CommandeController::class);
    ////////////////////////////////////////////////////////////////////////////////
    Route::get('/dashboard', [DashboardController::class,'index']);
    Route::DELETE('/commercials/{id}', [CommercialController::class,'destroy'])->middleware('is_responsable');
                                ////////////////////////////
    Route::post('/commercials/search/',[CommercialController::class,'search']);
    Route::get('/lieus/json', [LieuController::class,'json']);
    Route::resource('/lieus',LieuController::class);
    Route::resource('/commercials',CommercialController::class);
    Route::resource('/clients',ClientController::class);
    Route::resource('/lieus',LieuController::class);

    ///////////////////////////////////////////////////////////////////////////////
//
    Route::get('/activitys', [ActivityController::class,'index'])->middleware('is_admin');
    Route::PATCH('/analyses', [AnalyseController::class,'update']);
    Route::post('/analyses', [AnalyseController::class,'index']);
    Route::get('/analyses', [AnalyseController::class,'index']);
    Route::get('/analyses/export/{matrice_id}', [AnalyseController::class, 'export']);
    Route::post('/analyses/import/{matrice_id}', [AnalyseController::class, 'import']);
    Route::post('/analyses/refresh', [AnalyseController::class, 'refresh']);



    Route::get('report/{commande_id}', [ReportController::class, 'index']);

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/statistique', function () {
        return view('statistique');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/CommandeByMatrice', [DashboardAdminController::class,'CommandeByMatrice']);
    Route::get('/AmountCommercial', [DashboardAdminController::class,'AmountCommercial']);
    Route::get('/commercialTable', [DashboardAdminController::class,'commercialTable']);
    Route::get('/top5Commercial', [DashboardAdminController::class,'top5Commercial']);
    Route::get('/statistiqueLabo', [DashboardAdminController::class,'statistiqueLabo']);
    Route::get('/withZone', [DashboardAdminController::class,'withZone']);
    Route::get('/cabyzone', [DashboardAdminController::class,'CAbyZone']);

});
