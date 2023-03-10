<?php
/**
 * Created by NiNaCoder.
 * Date: 2019-06-23
 * Time: 18:10
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('subscription/momo/{id}', '\App\Modules\MoMo\Controller@subscriptionAuthorization')->name('momo.subscription.authorization');
    Route::get('subscription/momo/callback/{id}', '\App\Modules\MoMo\Controller@subscriptionCallback')->name('momo.subscription.callback');
});
