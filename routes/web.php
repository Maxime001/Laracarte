<?php


Route::get('/',[
    'as'=>'root_path',
    'uses'=>'PagesController@home',
]);

Route::get('/about',[
    'as'=>'about_path',
    'uses'=>'PagesController@about',
]);

Route::get('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactController@create',
]);

Route::post('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactController@store',
]);

Route::get('/test-email',function() {
    return new \App\Mail\ContactMessageCreated('nom','mail','message');
});