<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => $this->faker->unique()->numerify('#########'),
            'nama' => $this->faker->name,
            'kelas_id' => $this->faker->numberBetween(1, 6),
            'tgl_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address,
            
        ];
    }
}
