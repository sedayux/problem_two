<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerPlayersTest extends TestCase
{
    
    use WithFaker;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST', '/players/store', [
                'nama' => $this->faker->words(3, true),
                'teams_id' => $this->faker->randomNumber(1),
                ]);

        
        $response->assertStatus(200);
    }
}
