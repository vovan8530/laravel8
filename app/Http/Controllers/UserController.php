<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller {

  /**
   * Get all users collection
   *
   * @return View
   */
  public function index(): View {
//    $users = collect(DB::table('users')
//      ->leftJoin('city_user', 'users.id', '=', 'city_user.user_id')
//      ->leftJoin('cities', 'city_user.city_id', '=', 'cities.id')
//      ->select('users.name as user_name', 'cities.title as city_title')
//      ->get())->groupBy('user_name');

//    $users->groupBy('user_name')

//    dd($users);


//    $users = User::all()->load('cities');
//    dd($users);

    $users = User::all();

    return view('users.index', [
      'users' => $users
    ]);
  }

  /**
   * Get user by id
   *
   * @param User $user
   * @return View
   */
  public function show(User $user): View {
    return view('users.show', ['user' => $user]);
  }

  /**
   * Create new user
   *
   * @param User $user
   * @return View
   */
  public function create(User $user): View {
    return view('users.edit', ['user' => $user]);
  }

  /**
   * Save new user model
   *
   * @param Request $request
   * @param User $user
   * @return RedirectResponse
   */
  public function store(Request $request, User $user): RedirectResponse {
    $user->fill($request->all())->save();

    return redirect('users');
  }

  /**
   * Edit user model
   *
   * @param User $user
   * @return View
   */
  public function edit(User $user): View {
    return view('users.edit', ['user' => $user]);
  }

  /**
   * Update user model
   *
   * @param Request $request
   * @param User $user
   * @return RedirectResponse
   */
  public function update(Request $request, User $user): RedirectResponse {
    $user->update($request->all());

    return redirect('users');
  }

  /**
   * @param User $user
   * @return JsonResponse
   */
  public function destroy(User $user): JsonResponse {
    $user->cities()->detach();
    $user->delete();
    return response()->json('success', 200);
  }
}
