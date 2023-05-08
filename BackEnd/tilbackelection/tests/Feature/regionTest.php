<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class regionTest extends TestCase
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
        $region=["label" => "Hello"];       
        $response = $this-> withHeaders([
            'X-Header'=> 'Value'
        ])->POST('api/region',$region);
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
        $response = $this->get('api/region');

        $response->assertStatus(200);
    }
}
