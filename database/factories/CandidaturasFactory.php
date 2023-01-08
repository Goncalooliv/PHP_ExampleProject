<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidaturasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomeCandidato' => $this->faker->name(),
            'idCandidato' => $this->faker->id(),
            'emailCandidato' => $this->faker->unique()->safeEmail(),
            'idAnuncio' => $this->faker->id(),
        ];
    }
}
