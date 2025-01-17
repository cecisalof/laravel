<?php

namespace Database\Factories;

use App\Models\Record; // Importar el modelo Record
use App\Models\Genre;  // Importar el modelo Genre
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'artist' => $this->faker->name(),
            'release_year' => $this->faker->year(),
            'status' => $this->faker->randomElement(['nuevo', 'usado', 'colección']),
            'price' => $this->faker->randomFloat(2, 10, 50),
            'cover_image' => $this->faker->imageUrl(640, 480, 'vinyl', true, 'Faker'), // URL ficticia para imagen
        ];
    }

    // Asociar uno o dos géneros de la tabla genres después de crear un Record
    public function configure()
    {
        return $this->afterCreating(function (Record $record) {
            $genres = Genre::inRandomOrder()->take(rand(1, 2))->pluck('id'); // Obtener 1 o 2 géneros al azar
            $record->genres()->attach($genres);
        });
    }
}
