<?php

namespace App\Http\Controllers;


use App\Enums\PositionTypes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EmployeeUserController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(): Response {
//    $users = collect(DB::table('employee_users')->select('position', 'name')->get()->all());
//    $users = collect(DB::table('employee_users')->where('id' ,'=', 400)->orWhere('id', '>', 8)->get());
//    $users = collect(DB::table('employee_users')->where('salary' ,'=', 400)->first());
//    $users = DB::table('employee_users')->pluck('name');
//    $users = collect(DB::table('employee_users')->whereBetween('salary',[400, 600])->get());
//    $users = collect(DB::table('employee_users')->whereNotBetween('salary',[300, 600])->get());
//    $users = collect(DB::table('employee_users')->whereIn('id',[1, 3, 5])->get());
//    $users = collect(DB::table('employee_users')->whereNotIn('id',[1, 3, 5])->get());
//    $users = collect(DB::table('employee_users')->whereSalaryOrPosition(400, 1)->get());
//    $users = collect(DB::table('employee_users')->whereSalaryAndPosition(400, 1)->get());
//    $users = collect(DB::table('employee_users')->orderBy('salary', 'asc')->get());
//    $users = collect(DB::table('employee_users')->orderBy('birthday', 'desc')->get());
//    $users = collect(DB::table('employee_users')->max('salary'));
//    $users = collect(DB::table('employee_users')->sum('salary'));
//    $users = collect(DB::table('employee_users')->groupBy('position')->havingRaw('MIN(salary)')->get());
//    $users = collect(DB::table('employee_users')->select('salary', 'position', DB::raw('min(salary) as min_salary'))->groupBy('position')->get());
//    $users = collect(DB::table('employee_users')->select('salary', 'position', DB::raw('sum(salary) as sum_salary'))->groupBy('position')->get());
//    $users = collect(DB::table('employee_users')->whereDate('birthday', '1992-02-18')->get());
//    $users = collect(DB::table('employee_users')->whereDay('birthday', '19')->get());
//    $users = collect(DB::table('employee_users')->whereMonth('birthday', 03)->get());
//    $users = collect(DB::table('employee_users')->whereYear('birthday', 1980)->get());

//    $events = collect(DB::table('events')->whereColumn('start', 'finish')->get());
//    dd($events);
//    dd($users);
//    $users->flatMap(fn($item, $key) => $item->position = PositionTypes::$LABELS[$item->position]);

    $users = collect(DB::table('employee_users')->get()->all());
    return response()->view('employee-users.index', ['users' => $users]);
  }

  /**
   * @return RedirectResponse
   */
  public function create(): RedirectResponse {
    DB::table('employee_users')->insert([
      [
      'name' => 'Kirill',
      'birthday' => '1985-11-27',
      'position' => 2,
      'salary' => 1000,
      "created_at" =>  Carbon::now(),
      "updated_at" => Carbon::now(),
      ],
      [
      'name' => 'Maksim',
      'birthday' => '1982-01-17',
      'position' => 3,
      'salary' => 1100,
      "created_at" =>  Carbon::now(),
      "updated_at" => Carbon::now(),
      ],
      [
      'name' => 'Dima',
      'birthday' => '1979-08-02',
      'position' => 3,
      'salary' => 1200,
      "created_at" =>  Carbon::now(),
      "updated_at" => Carbon::now(),
      ]
    ]);
    return response()->redirectTo('employeeUsers');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return RedirectResponse
   */
  public function edit(int $id): RedirectResponse {
    DB::table('employee_users')
      ->where('id', $id)
      ->update(
      [
        'name' => 'Kuznetsov',
        'birthday' => '1985-07-01',
        'position' => 1,
        'salary' => 1400,
        "updated_at" => Carbon::now(),
      ]);
    return response()->redirectTo('employeeUsers');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return RedirectResponse
   */
  public function destroy(int $id): RedirectResponse {
    DB::table('employee_users')
      ->where('id', $id)
      ->delete();
    return response()->redirectTo('employeeUsers');
  }
}
