<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    Product::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    SubCategory::query()
      ->each(function ($subCategory) {
        Product::factory()->count(3)->create()
          ->each(function ($product) use ($subCategory) {
            $product->subCategory()->associate($subCategory)->save();
          });
      });
  }
}
