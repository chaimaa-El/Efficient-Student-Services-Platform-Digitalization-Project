<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\resTerrainController;
use App\Http\Controllers\demStageController;
use App\Http\Controllers\resEspaceController;
use App\Http\Controllers\attesAbsenceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactUsFormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('user.index'); });
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
/*Route::get('/salut', 'CustomAuthController@salut')->name('salut');*/
/*Route::get('/salut2', 'CustomAuthController@salut2')->name('salut2');*/
Route::get('/adminHanane', 'CustomAuthController@adminHanane')->name('adminHanane');
Route::get('/salut', [CustomAuthController::class, 'salut']); 
Route::get('/salut2', [CustomAuthController::class, 'salut2']); 
/*Route::post('custom-registration', [
    'as' => 'register.custom',
    'uses' => 'CustomAuthController@customRegistration'
    ]);
Route::post('custom-login', [
        'as' => 'login.custom',
        'uses' => 'CustomAuthController@customLogin'
        ]);*/
        /*Route::get('dashboard', 'CustomAuthController@dashboard');
        Route::get('signout', [
            'as' => 'signout',
            'uses' => 'CustomAuthController@signOut'
            ]);
*/

            Route::resource('resTerrains',resTerrainController::class);

Route::get('/reservationTerrain', function () { return view('reservationTerrain'); });
Route::resource('resEspaces',resEspaceController::class);
Route::get('/reservationEspace', function () { return view('reservationEspace'); });
Route::resource('demStage',demStageController::class);
Route::get('/demandeStage', function () { return view('demandeStage'); });
Route::resource('attesAbsence',attesAbsenceController::class);
Route::get('/attestationAbsence', function () { return view('attestationAbsence'); });

/*Route::get('/demandes','Admin\DashboardController@index');*/
Route::get('/demandes', [DashboardController::class, 'index']); 
Route::get('/history/{id}', [DashboardController::class, 'history']); 
Route::get('/history1/{id}', [DashboardController::class, 'history1']); 
Route::get('/history2/{id}', [DashboardController::class, 'history2']); 
Route::get('/history3/{id}', [DashboardController::class, 'history3']);

/*Route::get('/infosup', [DashboardController::class, 'visualiser2']); */
Route::get('/visualiser2/{id}', [DashboardController::class, 'visualiser2']); 
Route::get('/visualiser3/{id}', [DashboardController::class, 'visualiser3']); 
Route::get('/visualiser1/{id}', [DashboardController::class, 'visualiser1']); 
Route::get('/visualiser/{id}', [DashboardController::class, 'visualiser']); 

Route::get('pdf', [DashboardController::class, 'visualiser2']); 
Route::get('pdf', [DashboardController::class, 'visualiser3']); 
Route::get('pdf', [DashboardController::class, 'visualiser1']); 
Route::get('pdf', [DashboardController::class, 'visualiser']);


Route::get('/user',function(){
    return view('admin.user');
});
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/Web_masters', function () { return view('Web_masters'); });