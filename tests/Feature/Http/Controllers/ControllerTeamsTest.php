<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Teams;
use Illuminate\Database\Eloquent\Factories\Factory;

class ControllerTeamsTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST', '/teams/store', ['nama' => $this->faker->words(3, true)]);
        $response->assertStatus(200);
        
        // $response = $this->get('/');

        // $teams = $factory('App\Models\Teams')->create();

        // $response = $this->post(route('teams.store'), [
        //         //isi parameter sesuai kebutuhan request
        //         'nama' => $this->faker->words(3, true)
        //     ]);

        // $response->assertStatus(200);

        // $response
        //     ->assertStatus(200)
        //     ->assertJson([
        //         'created' => true,
        //     ]);
    }
}