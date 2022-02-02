<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class User2Controller extends Controller {

  /**
   * @return View
   */
  public function index(): View {
//    $users = DB::table('users2')->where('age', '>=', 18)->get();
    $users = DB::select('SELECT * FROM users2 WHERE age>=18');
//    dd($users);
    return view('users2.index', ['users' => $users]);
  }

  /**
   * @return RedirectResponse
   */
  public function insert(): RedirectResponse {
//    DB::insert("INSERT INTO users2 (name, surname, age) VALUES ('Dima', 'Rezanov', 43)");
    DB::table('users2')->insert(['name' => 'Maks', 'surname' => 'Prichinenko', 'age' => 33]);
    return redirect('/users2');
  }

  /**
   * @param int $id
   * @return RedirectResponse
   */
  public function delete(int $id): RedirectResponse {
//    DB::delete("DELETE FROM users2 WHERE id = $id");
    DB::table("users2")->delete(['id'=> $id]);
    return redirect('/users2');
  }

  /**
   * @param int $id
   * @return RedirectResponse
   */
  public function update(int $id): RedirectResponse {
    DB::update("UPDATE users2 SET surname = 'NewSurname2' WHERE id = $id");
//    DB::table("users2")->where(['id'=> $id])->update(['surname'=> 'NewSurname']);
    return redirect('/users2');
  }
}
