<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_client' => $this->faker->numberBetween(1, 800), // ID client aléatoire entre 1 et 800
            'id_produit' => $this->faker->numberBetween(1, 200), // ID produit aléatoire entre 1 et 200
            'quantite' => $this->faker->numberBetween(1, 100), // Quantité aléatoire entre 1 et 100
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s'), // Date aléatoire dans l'année passée au format datetime
        ];
        
        
    }
}
