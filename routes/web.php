<?php

Route::get('/', function () {
    return 'Home';
});

Route::get('/users','UserController@index');

Route::get('/users/{id}','UserController@showUserDetails')
    ->where("id","[0-9]+");//Beacuse this view only accepts numbers and is not confused with 'newUser'

Route::get('/users/newUser', 'UserController@createUser');

Route::get('/greeting/{name}/{nickName?}', 'WelcomeUserController@index');