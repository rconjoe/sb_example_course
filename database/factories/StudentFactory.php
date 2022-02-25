<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
  public function definition()
  {
    return [
      'studentId' => $this->faker->numerify('#############'),
      'firstName' => $this->faker->firstName(),
      'lastName' => $this->faker->lastName(),
      'email' => $this->faker->email(),
      'present' => $this->faker->boolean(75)
    ];
  }
}
