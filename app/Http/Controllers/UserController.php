<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
         $users  = [
            'Sebastian',
            'Angie',
            'Luna',
            'Nena',
            '<script>alert("Bad method to send data guy")</script>'
         ];
        /* dd($users);*/
   		return view('users',[
            'users'=>$users,
            'title'=>'User list <i>- SebastianBaezCode</i>'
         ]);
         //OR
        /* return view('users')->with([
            'users'=>$users,
            'title'=>'User list <i>- SebastianBaezCode</i>'
         ]);*/
   }

   public function showUserDetails($id)
   {
   		return "Showing user details: ".$id."";
   } 

   public function createUser()
   {
   		return "Creating a new user";
   }
}
