<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class bulletinTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_save()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_update()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_delete()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_getall()
    {
        $response = $this->get('api/Bulletin');

        $response->assertStatus(200);
    }

}
