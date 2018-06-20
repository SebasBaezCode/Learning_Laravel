<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name,$nickName = null)//__invoke, if i use __invoke method of php, i should not use the method name
    {
    	if($nickName)
		{
		     $msg = "Welcome {$name}, your nickname is: {$nickName}";
		}
		else
		{
		     $msg = "Welcome {$name}, you haven't nickname";
		}
		return $msg;
    }
}
