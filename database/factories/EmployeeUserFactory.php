<?php

namespace Database\Factories;

use App\Enums\PositionTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeUserFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition(): array {
    $arrayKey = array_rand(PositionTypes::getValues());
    return [
      'name' => $this->faker->name(),
      'birthday' => $this->faker->date(),
      'position' => PositionTypes::getValues()[$arrayKey],
      'salary' => $this->faker->numberBetween(400, 1000),
    ];
  }
}
