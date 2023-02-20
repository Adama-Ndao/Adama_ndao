<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->lastName,
            'prenom' =>$this->faker->firstName,
            'langage' =>$this->faker->word,
            'niveau' =>$this->faker->word,
            'age' =>$this->faker->biasedNumberBetween,
            'updated_at' =>$this->faker->date,
            'created_at' =>$this->faker->date
        ];
    }
}
