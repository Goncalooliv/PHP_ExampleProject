<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpresasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome_empresa' =>$this->faker->company(),
            'posicao'=>$this->faker->jobTitle(),
            'categoria'=>$this->faker->jobTitle(),
            'pais'=>$this->faker->country(),
            'distrito'=>$this->faker->city(),
            'requisitos'=>$this->faker->text(),
            'tipo'=>$this->faker->randomElement(['Emprego','Voluntariado','Estagio']),
            'contacto'=>$this->faker->phoneNumber(),
            'empresas_id' => '1',
            'premium' => $this->faker->randomElement(['0','1']),
            'date' => $this->faker->date('d/m/Y','now'),
        ];
    }
}
