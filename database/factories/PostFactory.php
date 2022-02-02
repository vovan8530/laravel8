<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition() {
    return [
      'title' => $this->faker->word(),
      'description' => $this->faker->paragraph(),
      'text' => $this->faker->text(),
      'date_publication' => $this->faker->date(),
    ];
  }
}
