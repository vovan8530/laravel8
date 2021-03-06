<?php

namespace Database\Seeders;

use App\Models\EmployeeUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    \App\Models\User::factory(5)->create();
    $this->call([
      CategorySeeder::class,
      SubCategorySeeder::class,
      ProductSeeder::class,
      CitySeeder::class,
      ShopCategorySeeder::class,
      EmployeeUserSeeder::class,
      PostSeeder::class
    ]);
  }
}
