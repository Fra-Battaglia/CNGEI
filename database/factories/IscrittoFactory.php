<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iscritto>
 */
class IscrittoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'cognome' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'numero_di_telefono' => fake()->randomNumber(9, true),
            'genere' => fake()->randomElement(['M', 'F']),
            'indirizzo' => fake()->address(),
            'data_di_nascita' => fake()->date(),
            'luogo_di_nascita' => fake()->city(),
            'anni_in_unità' => fake()->numberBetween(1, 4),
            'anni_di_scoutismo' => fake()->numberBetween(1, 8),
            'progressione_orizzontale' => fake()->word(),
            'progressione_verticale' => fake()->randomElement(['Scopro', 'Conosco', 'Condivido', 'Interiorizzo',]),
            'numero_di_tessera' => fake()->randomNumber(5, false),
            'ruolo' => fake()->randomElement(['E', 'VCP', 'CP']),
            'pattuglia' => fake()->randomElement(['Squali', 'Antilopi', 'Falchi', 'Linci',]),
            'gruppo' => fake()->randomElement(['Como 1', 'Como 2',]),
            'branca' => 'Esploratori',
            'promessa' => fake()->boolean(),
        ];
    }
}
