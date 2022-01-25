<?php

namespace Database\Seeders;

use App\Models\ShopCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopCategorySeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    ShopCategory::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    $parent1 = ShopCategory::create([
      'title' => 'Бытовая техника'
    ]);

    $child1 = $parent1->children()->create([
      'title' => 'Телевизоры'
    ]);

    $descendant1 = $child1->children()->create([
      'title' => 'Телевизоры новые'
    ]);

    $descendant2 = $child1->children()->create([
      'title' => 'Телевизоры б/у'
    ]);

    $parent1->children()->create([
      'title' => 'Холодильники'
    ]);

    $parent1->children()->create([
      'title' => 'Компьтеры'
    ]);

    $parent2 = ShopCategory::create([
      'title' => 'Мебель'
    ]);

    $parent2->children()->create([
      'title' => 'Кухни'
    ]);

    $parent2->children()->create([
      'title' => 'Спальни'
    ]);
  }
}
