<?php
Route::get('user',function (){
    return 'welcom in user page';
});

Route::group(['namespace'=>'Front'],function (){


    Route::get('user1','SecandController@getString1')->middleware('auth');

    Route::get('user2','SecandController@getString2');



    Route::get('user3','SecandController@getString3');

    Route::get('user4','SecandController@getString4');

    Route::get('index','SecandController@getIndex');



});
