<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        return [
            'nama_produk' => "Produk-" . fake()->numberBetween(1, 500),
            'jenis_produk' => 'SNACK',
            'foto_produk' => Str::random(30),
            'rasa' => 'Pedas',
            'jumlah_produk' => fake()->numberBetween(100, 300),
            'harga_produk' => fake()->numberBetween(1000, 5000),
            'harga_jual' => fake()->numberBetween(5500, 7000),
            'berat_produk' => fake()->numberBetween(70, 100) . "g"
        ];
    }
}
