<?php

Route::group(['prefix' => 'api',  'middleware' => 'api'], function() {
    Route::post(config('coinbase.webhookUrl'), '\Shakurov\Coinbase\Http\Controllers\WebhookController')->name('coinbase-webhook');
});
