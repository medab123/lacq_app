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
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Intervention\Image\ImageManagerStatic as Image;





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
    Route::resource('roles', RoleController::class);
    Route::post('/users/update', [userController::class,'update']);
    Route::resource('/users',userController::class);
    /////////////////////////////////////////////////////////////////////////////////
    Route::resource('/menus', MenuController::class);
                                ////////////////////////////
    Route::post('/menus/search/',[MenuController::class,'search']);
    //////////////////////////////////////////////////////////////////////////////
    Route::resource('/matrices', MatriceController::class);
                                ////////////////////////////
    Route::post('/matrices/search/',[MatriceController::class,'search']);
    /////////////////////////////////////////////////////////////////////////////
    Route::DELETE('/commandes/{id}', [CommandeController::class,'destroy']);
                        //////////////////////////////////////////
    Route::get('/commandes/json', [CommandeController::class,'json']);
    Route::post('/commandes/search/',[CommandeController::class,'search']);
    Route::get('/commandes/commantaire/{commande_id}',[CommandeController::class,'getCommantaire']);
    Route::post('/commandes/reject',[CommandeController::class,'reject']);
    Route::get('/commandes/search/{state}',[CommandeController::class,'getCommandesWhereState']);
    Route::get('/commandes/{id}/valider',[CommandeController::class,'valider']);
    Route::get('/commandes/{matrice_is}/menuOfMatrice',[CommandeController::class,'menuOfMatrice']);
    Route::resource('/commandes',CommandeController::class);
    ////////////////////////////////////////////////////////////////////////////////
    Route::get('/dashboard', [DashboardController::class,'index']);
                                ////////////////////////////
    Route::resource('/commercials',CommercialController::class);
    Route::post('/commercials/search/',[CommercialController::class,'search']);
    Route::get('/lieus/json/{page}', [LieuController::class,'json']);
    Route::resource('/lieus',LieuController::class);
    Route::resource('/clients',ClientController::class);
    Route::resource('/lieus',LieuController::class);
    ///////////////////////////////////////////////////////////////////////////////
    Route::get('/activitys', [ActivityController::class,'index']);
    //////////////////////////////////////////////////////////////////////////////
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
        if(Gate::authorize('dashboard-admin-list'))
        return view('statistique');
    });
    Route::resource('roles', RoleController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/CommandeByMatrice', [DashboardAdminController::class,'CommandeByMatrice']);
    Route::get('/AmountCommercial', [DashboardAdminController::class,'AmountCommercial']);
    Route::get('/commercialTable', [DashboardAdminController::class,'commercialTable']);
    Route::get('/top5Commercial', [DashboardAdminController::class,'top5Commercial']);
    Route::get('/statistiqueLabo', [DashboardAdminController::class,'statistiqueLabo']);
    Route::get('/withZone', [DashboardAdminController::class,'withZone']);
    Route::get('/cabyzone', [DashboardAdminController::class,'CAbyZone']);
    Route::get('/image/{a}/{l}/{s}', function($a,$l,$s) {
        return  '<img src="'.App\Custom\Archivos::GeneratTriengleTextural($a,$l,$s)->encode('data-url').'>"';
    });


});
