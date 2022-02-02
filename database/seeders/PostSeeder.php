<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    Post::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    Post::factory()
      ->count(10)
      ->create();
  }
}
