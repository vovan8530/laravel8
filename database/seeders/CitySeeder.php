<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\CityUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    City::query()->truncate();
    CityUser::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    City::factory()
      ->count(3)
      ->create();

    User::query()
      ->each(function ($users) {
          $cities = City::all()->random(rand(1,3));
          $users->cities()->sync($cities);
      });
  }
}
