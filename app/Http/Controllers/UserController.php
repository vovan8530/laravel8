<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller {

  /**
   * @return View
   */
  public function index(): View {
    $users = collect(DB::table('users')
      ->leftJoin('city_user', 'users.id', '=', 'city_user.user_id')
      ->leftJoin('cities', 'city_user.city_id', '=', 'cities.id')
      ->select('users.name as user_name', 'cities.title as city_title')
      ->get())->groupBy('user_name');

//    $users->groupBy('user_name')

//    dd($users);


//    $users = User::all()->load('cities');
//    dd($users);


    return view('users', [
      'users' => $users
    ]);
  }
}
