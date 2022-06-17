<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //Guarda en "name" una frase generada aleatoriamente
            'name'=> $this->faker->sentence(),
            //Guarda en "descripcion" un parrafo generado aleatoriamente
            'descripcion'=> $this->faker->paragraph(),
            //Guarda en "categoria" un elemento elegido entre dos opciones
            //definidas en una array
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
