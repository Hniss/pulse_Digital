<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
public function testBasicTest()
{
    $response = $this->get('/');
    $response->assertViewHas('message', 'Vous y êtes !');
}
}
