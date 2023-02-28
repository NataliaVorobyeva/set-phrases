<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Frase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $this->withoutExceptionHandling();
        // scenario
        $frases = Frase::factory(10)->create();

        // when
        $this->assertCount(10,$frases);

        // given
        
        $response = $this->get('/');

        $response->assertStatus(200)
        ->assertViewIs('welcome');
        // ->assertViewHas('frases', $frases);

    }


}
