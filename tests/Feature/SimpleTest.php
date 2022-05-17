<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SimpleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //public function test_example()
    //{
        //$response = $this->get('/');

        //$response->assertStatus(200);
    //}

    public function login_test(){
        $response = $this->get('/');
        $response->assertStatus(200);
        //$this->get('/auth/login')->assertStatus(200);
    }

    public function register_test(){
        $response = $this->get('permission/user/index');
        $response->assertStatus(200);
    }
}
