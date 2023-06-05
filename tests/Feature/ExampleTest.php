<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_example()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
