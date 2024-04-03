<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Helpers\returnerController;
use App\Http\Controllers\Helpers\updaterController;
use App\Http\Controllers\Helpers\DeleterController;
use App\Http\Controllers\Helpers\AuthController;
use App\Http\Controllers\NewsLettersController;
use App\Http\Controllers\MyNewsController;
use App\Http\Controllers\SuporterController ;
use App\Http\Controllers\ideasController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\multisliderController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GalaryController;


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

Route::get('hi' , [returnerController::class , 'hi']);
Route::get('auth/accessor/mydashboard' , function(){
    return view('adminpanel.admin_login');
})->name('login');
####################################################################################################
Route::middleware('Dashboard')                                                                     #
    ->prefix("Dashboard")                                                                          #
    ->group(function(){                                                                            #
                                                                                                   #
        Route::get('users' , [returnerController::class , 'users']);                               #
        Route::get('users' , [returnerController::class , 'users']);                               #
        Route::get('mynews' , [returnerController::class , 'p_mynews'])->name('mynews');           #
        Route::get('addnews' , [returnerController::class , 'addnews'])->name('addnews');          #
        Route::get('addslider' , [returnerController::class , 'addslider']);                       #
        Route::get('fixaboutus' , [returnerController::class , 'fixaboutus']);                     #
        Route::get('mycomments' , [returnerController::class , 'mycomments']);                     #
        Route::get('panel' , [returnerController::class , 'panel'])->name("panel");                #
        Route::get('galary' , [returnerController::class , 'galary'])->name("galary");             #
});                                                                                                #
####################################################################################################
// ---------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------
####################################################################################################
Route::middleware('Amir')                                                                          #
    ->prefix("Dashboard")                                                                          #
    ->group(function(){                                                                            #
        Route::post('savemeyes', [AuthController::class , 'savemeyes']);                           #
        Route::get('add_admin' , [returnerController::class , 'add_admin']);                       #
        Route::post('save_admin', [AuthController::class , 'save_admin']);                         #
        Route::get('statistics' , [returnerController::class , 'Amar']);                           #                                                                                       #
});                                                                                                # 
####################################################################################################

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// ----------------------------------------------Get---------------------------------------------------
// ----------------------------------------------Get---------------------------------------------------
Route::get('lastnews', [returnerController::class , 'lastnews']);
Route::post('searchnews' , [returnerController::class , 'searchnews']);
Route::get('/news/{cat_Code}/{category}' , [returnerController::class , 'catnews']);
Route::get('/', [returnerController::class , 'mianPage']);
Route::get('about-us' , [returnerController::class , 'about']);
Route::get('idea{id}', [ideasController::class , 'seenidea']);
Route::get('sup{id}', [SuporterController::class , 'seensup']);
Route::get('/{newscode}/{link}', [returnerController::class , 'eachnews']);
// ----------------------------------------------Get---------------------------------------------------
// ----------------------------------------------Get---------------------------------------------------

############################################################################################################
############################################################################################################
############################################################################################################
############################################################################################################
############################################################################################################
############################################################################################################

// ----------------------------------------------SavePOST---------------------------------------------------
// ----------------------------------------------SavePOST---------------------------------------------------
Route::post('saveabout', [AboutController::class , 'saveabout']);
Route::post('updatemynews{newsCode}', [updaterController::class , 'updatenews']);
Route::post('likeControl/{newscodeid}', [MyNewsController::class , 'likeControl']);
Route::post('viewCounter/{newscodeid}', [MyNewsController::class , 'viewCounter']);
Route::post('savetalslider', [SliderController::class , 'savetalslider']);
Route::post('savemultislider', [SliderController::class , 'savemultislider']);
Route::post('saveidea', [ideasController::class , 'saveidea']);
Route::post('savesuporter', [SuporterController::class , 'savesuporter']);
Route::post('/okcomment', [CommentsController::class , 'okcomment']);
Route::post('savegalary', [GalaryController::class , 'savegalary']);
Route::post('searchUser', [returnerController::class , 'searchUser']);
Route::post('make_news', [MyNewsController::class , 'make_news']);
Route::post('savemedia', [MediaController::class , 'savemedia']);
Route::post('save_comment-{newscode}', [CommentsController::class , 'save_comment']);
Route::post('saveUser', [NewsLettersController::class , 'saveUser']);
Route::post('save_category', [CategoriesController::class , 'save_category']);
Route::post('accessToDashboard', [AuthController::class , 'accessToDashboard']);



// ----------------------------------------------SavePOST---------------------------------------------------
// ----------------------------------------------SavePOST---------------------------------------------------

// ==================================================================================================================
// ==================================================================================================================
// ==================================================================================================================

// ----------------------------------------------DeletePOST---------------------------------------------------
// ----------------------------------------------DeletePOST---------------------------------------------------

Route::post('delnews-{newsCode}', [DeleterController::class , 'delnews']);
Route::post('delmyadmin', [DeleterController::class , 'delmyadmin']);

// ----------------------------------------------DeletePOST---------------------------------------------------
// ----------------------------------------------DeletePOST---------------------------------------------------
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// ----------------------------------------------Updater---------------------------------------------------
// ----------------------------------------------Updater---------------------------------------------------
Route::post('editenews/{newsCode}', [updaterController::class , 'editenews']);
// ----------------------------------------------Updater---------------------------------------------------
// ----------------------------------------------Updater---------------------------------------------------

#خیلی پروژه باحالی بود بماند به یادگار 
#خوابگاه دانشجویی
#Invisibles Amirsajjad Akbar hossein