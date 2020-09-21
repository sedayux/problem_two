<?php

namespace Database\Factories;

use App\Models\Teams;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TeamsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teams::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(Teams::class, function (Faker $faker) {
            return [
                'name' => $faker->words(3, true)
            ];
        });
    }
}
