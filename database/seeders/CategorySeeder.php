<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    Category::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    Category::factory()
      ->count(5)
      ->create();
  }
}
