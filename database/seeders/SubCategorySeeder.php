<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    SubCategory::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    Category::query()
      ->each(function ($category) {
        SubCategory::factory()->count(2)->create()
          ->each(function ($subCategory) use ($category) {
            $subCategory->category()->associate($category)->save();
          });
      });
  }
}

