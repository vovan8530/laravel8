<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition() {
    return [
      'title' => $this->faker->word(),
      'description' => $this->faker->paragraph(),
      'price' => $this->faker->randomFloat(2, 0, 10000),
      'quantity' => $this->faker->numberBetween(1, 30),
    ];
  }
}
