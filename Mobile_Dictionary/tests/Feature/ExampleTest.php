<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Services\UserInfoService;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_addContact()
    {
        $this->post('/api/user',['name' => "Jaideep3",'mobile_number' => "9876341", 'email'=>"ooo123@gmail.com"]);
        $this->post('/api/user',['name' => "Jaideep2",'mobile_number' => "9876342", 'email'=>"Ooo123@gmail.com"]);
        $response = $this->post('/api/user',['name' => "Jaideep1",'mobile_number' => "987634", 'email'=>"oo123@gmail.com"]);
        $response->assertStatus(201);

    }

    public function test_getAllUsers()
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);

    }
    public function test_getUserByName()
    {
        $response = $this->get('/api/user/byName/', ['name' => "Jaideep1"]);
        $response->assertStatus(200);

    }
    public function test_getUserByNumber()
    {
        $response = $this->get('/api/user/byNumber/',['mobile_number' => "987634"]);
        $response->assertStatus(200);

    }
    public function test_getUserByEmail()
    {
        $response = $this->get('/api/user/byEmail/',['email' => "oo123@gmail.com"]);
        $response->assertStatus(200);

    }
    public function test_removeUserByName()
    {
        $response = $this->delete('/api/user/byName/',['name' => "Jaideep1"]);
        $response->assertStatus(200);

    }
    public function test_removeUserByEmail()
    {
        $response = $this->delete('/api/user/byEmail/',['email'=>"ooo123@gmail.com"]);
        $response->assertStatus(200);

    }
    public function test_removeUserByNumber()
    {
        $response = $this->delete('/api/user/byNumber/',['mobile_number' => "9876342"]);
        $response->assertStatus(200);

    }
}
