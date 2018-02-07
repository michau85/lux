<?php
Route::group(['namespace' => 'michau85\lux\Controllers'], function()
{
    Route::get('slap', ['uses' => 'LuxController@lux']);
}
);


