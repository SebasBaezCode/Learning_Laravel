<?php

Route::get('/', function () {
    return 'Home';
});

Route::get('/users',function(){
    return 'Users';
});

Route::get('/users/{id}',function($id){
    //return 'Showing user details: ' .$_GET['id'];
    return "Showing user details: {$id}";
})->where("id","[0-9]+");//Beacuse this view only accepts numbers and is not confused with 'newUser'

Route::get('/users/newUser',function(){
    return "Creating a new user";
});

Route::get('/greeting/{name}/{nickName?}',function($name,$nickName = null){
    if($nickName)
    {
        $msg = "Welcome {$name}, your nickname is: {$nickName}";
    }
    else
    {
        $msg = "Welcome {$name}, you haven't nickname";
    }
    return $msg;
});