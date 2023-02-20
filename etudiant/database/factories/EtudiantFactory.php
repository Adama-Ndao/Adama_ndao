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
            'prenom'=>$this->faker->firstName,
            'nom'=>$this->faker->lastName,
            'langage'=>$this->faker->sentence,
            'niveau'=>$this->faker->sentence,
            'age'=>$this->faker->buildingNumber,
            'updated_at'=>$this->faker->date,
            'created_at'=>$this->faker->date,
        ];
    }
}
