<?php

namespace Database\Seeders;

use App\Models\EmployeeUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeUserSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    EmployeeUser::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    EmployeeUser::factory()
      ->count(10)
      ->create();
  }
}
