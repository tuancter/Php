<?php
/**
 * Created by NiNaCoder.
 * Date: 2019-08-01
 * Time: 20:42
 */
Route::post('auth/userInfoValidate', 'AuthController@userInfoValidate')->name('auth.info.validate');
Route::post('auth/usernameValidate', 'AuthController@usernameValidate')->name('auth.info.validate.username');
Route::post('auth/emailValidate', 'AuthController@emailValidate')->name('auth.info.validate.email');
Route::post('auth/signup', 'AuthController@signup')->name('auth.signup');
Route::post('auth/login', 'AuthController@login')->name('auth.login');
Route::get('connect/redirect/{service}', 'AuthController@socialiteLogin')->name('auth.login.socialite.redirect');
Route::any('connect/callback/{service}', 'AuthController@socialiteLogin')->name('auth.login.socialite.callback');
Route::post('connect/remove/{service}', 'AuthController@socialiteRemove')->name('auth.login.socialite.remove');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('settings', 'SettingsController@profile')->name('settings');
    Route::get('settings/subscription', 'SettingsController@subscription')->name('settings.subscription');
    Route::get('settings/account', 'SettingsController@account')->name('settings.account');
    Route::get('settings/password', 'SettingsController@password')->name('settings.password');
    Route::get('settings/preferences', 'SettingsController@preferences')->name('settings.preferences');
    Route::get('settings/services', 'SettingsController@services')->name('settings.services');
    Route::get('settings/devices', 'SettingsController@devices')->name('settings.devices');

    Route::post('auth/user', 'AuthController@user')->name('auth.user');
    Route::post('auth/user/settings/profile', 'AuthController@settingsProfile')->name('auth.user.settings.profile');
    Route::post('auth/user/settings/account', 'AuthController@settingsAccount')->name('auth.user.settings.account');
    Route::post('auth/user/settings/password', 'AuthController@settingsPassword')->name('auth.user.settings/password');
    Route::post('auth/user/settings/preferences', 'AuthController@settingsPreferences')->name('auth.user/settings/preferences');
    Route::post('auth/user/notifications', 'AuthController@notifications')->name('auth.user.notifications');
    Route::post('auth/user/notification-count', 'AuthController@notificationCount')->name('auth.user.notification.count');
    Route::post('auth/user/favorite', 'AuthController@favorite')->name('auth.user.favorite');
    Route::post('auth/user/song/favorite', 'AuthController@songFavorite')->name('auth.user.song.favorite');
    Route::post('auth/user/dob/update', 'AuthController@dobUpdate')->name('auth.user.dob.update');

    Route::post('auth/user/library', 'AuthController@library')->name('auth.user.library');
    Route::post('auth/user/song/library', 'AuthController@songLibrary')->name('auth.user.song.library');

    Route::post('auth/user/checkRole', 'AuthController@checkRole')->name('auth.user.role');
    Route::post('auth/user/subscription/cancel', 'AuthController@cancelSubscription')->name('auth.user.cancel.subscription');
    Route::get('auth/logout', 'AuthController@logout')->name('auth.logout');
});

