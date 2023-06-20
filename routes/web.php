<?php

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


Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){

    Route::controller(App\Http\Controllers\Backend\DashboardController::class)->group(function(){
        //Admin Dashboard
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::controller(App\Http\Controllers\Backend\SystemSettingController::class)->group(function(){
        
        //Site Setting
        Route::get('setting','index')->name('setting');
        Route::post('GeneralSettingUpdate','GeneralSettingUpdate')->name('GeneralSettingUpdate');

        //Google Map
        Route::get('google-map', 'loadGoogleMapPage')->name('google-map');
        Route::post('GoogleMapUpdate', 'GoogleMapUpdate')->name('GoogleMapUpdate');

        //Mail Settings
        Route::get('mail-settings', 'loadMailSettingsPage')->name('mail-settings');
        Route::post('saveMailSettings', 'saveMailSettings')->name('saveMailSettings');

        //Media Settings
        Route::get('/media-settings', 'loadMediaSettingsPage')->name('media-settings');
        Route::get('/getMediaSettingsTableData', 'getMediaSettingsTableData')->name('getMediaSettingsTableData');
        Route::post('/getMediaSettingsById', 'getMediaSettingsById')->name('getMediaSettingsById');
        Route::post('/MediaSettingsUpdate', 'MediaSettingsUpdate')->name('MediaSettingsUpdate');

    });

    Route::controller(App\Http\Controllers\Backend\UsersController::class)->group(function(){
        //Users Page
        Route::get('/users','getUsersPageLoad')->name('users');
        Route::get('/getUsersTableData','getUsersTableData')->name('getUsersTableData');
        Route::post('/saveUsersData','saveUsersData')->name('saveUsersData');
        Route::post('/getUserById','getUserById')->name('getUserById');
        Route::post('/deleteUser','deleteUser')->name('deleteUser');
        Route::post('/bulkActionUsers','bulkActionUsers')->name('bulkActionUsers');

        //Profile Page
        Route::get('/profile','getProfilePageLoad')->name('profile');
        Route::post('/profileUpdate','profileUpdate')->name('profileUpdate');
    });

    Route::controller(App\Http\Controllers\Backend\MediaController::class)->group(function(){
        //Media Page
        Route::get('/media', 'getMediaPageLoad')->name('media');
        Route::post('/getMediaById', 'getMediaById')->name('getMediaById');
        Route::post('/mediaUpdate', 'mediaUpdate')->name('mediaUpdate');
        Route::post('/onMediaDelete', 'onMediaDelete')->name('onMediaDelete');
        Route::get('/getGlobalMediaData', 'getGlobalMediaData')->name('getGlobalMediaData');
        Route::get('/getMediaPaginationData', 'getMediaPaginationData')->name('getMediaPaginationData');

        //All File Upload
        Route::post('/FileUpload', 'FileUpload')->name('FileUpload');
        Route::post('/MediaUpload', 'MediaUpload')->name('MediaUpload');
    });

});