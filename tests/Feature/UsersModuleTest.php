<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
     /** @test */ 
    function loadTheUsers()
    {
        $this->get('/users')
        ->assertStatus(200)
        ->assertSee('User list - SebastianBaezCode');
    }

    /** @test */
    function loadUserDetails()
    {
    	$this->get('/users/1235648')
    	->assertStatus(200)
    	->assertSee("Showing user details: 1235648");
    }

    /** @test */
    function loadNewUser()
    {
        $this->withoutExceptionHandling();

    	$this->get('/users/newUser')
    	->assertStatus(200)
    	->assertSee("Creating a new user");
    }

    /** @test */
    function loadUserGreeting1()
    {
    	$this->get('/greeting/UserNumber_1/Number_1')
    	->assertStatus(200)
    	->assertSee("Welcome UserNumber_1, your nickname is: Number_1");
    }

    /** @test */
    function loadUserGreeting2()
    {
    	$this->get('/greeting/UserNumber_1/')
    	->assertStatus(200)
    	->assertSee("Welcome UserNumber_1, you haven't nickname");
    }
}












