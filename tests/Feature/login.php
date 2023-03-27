<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class login extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example() {
        $response = $this->get('/logged-in-user');

        $response->assertStatus(200);
    }
}
