<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->id();
        // $table->string('nome_prodotto');
        // $table->string('marca_prodotto');
        // $table->text('descrizione');
        // $table->string('immagine_prodotto');
        // $table->decimal('prezzo');


        return [
            'nome_prodotto' => fake()->name(),
            'marca_prodotto' => fake()->company(),
            'descrizione' => fake()->paragraph(),
            'prezzo' => fake()->randomFloat(2, 1, 100),
            'immagine_prodotto' => fake()->imageUrl(640, 480, 'products', true),
        ];
    }
}
