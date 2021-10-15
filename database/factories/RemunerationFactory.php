<?php

namespace Database\Factories;

use App\Models\Remuneration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RemunerationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Remuneration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'salaire' => $this->faker->numberBetween(11,35)*100,
            'zip_code' => $this->faker->numberBetween(10001,99999),
        ];
    }
}
