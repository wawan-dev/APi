<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'nom' => $this->faker->firstName, // Nom aléatoire
            'description' => $this->faker->sentence, // Phrase aléatoire pour la description
            'lien_image' => $this->faker->imageUrl(), // URL d'image aléatoire
            'prix' => $this->faker->randomFloat(2, 1, 1000), // Prix aléatoire avec 2 décimales, entre 1 et 1000
            'tva' => $this->faker->randomFloat(2, 0, 20), // TVA aléatoire avec 2 décimales, entre 0% et 20%
        ];
        
      }

    
        
}
