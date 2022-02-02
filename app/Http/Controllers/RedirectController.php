<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class RedirectController extends Controller {

  /**
   * @param Request $request
   * @return View|RedirectResponse
   */
  public function show1(Request $request): View|RedirectResponse {
    if (!isset($request))
      return view('redirect.show1');
//    elseif ($request->num > 10)
//      return view('redirect.show1', ['num' => $request->get('num')]);
    else {
      $sum = array_sum($request->except('_token'));
      $request->session()->flash('sum', $sum);
      return redirect()->route('show2');
    }

  }

  /**
   * @return View
   * @throws \Psr\Container\ContainerExceptionInterface
   * @throws \Psr\Container\NotFoundExceptionInterface
   */
  public function show2(): View {
    $sum = session()->get('sum');
    return view('redirect.show2', ['sum' => $sum]);
  }

  /**
   * @param Request $request
   * @return Response|View
   * @throws \Exception
   */
  public function show3(Request $request): Response|View {
    if (empty($request->cookie('time'))) {
      $time = date_format(now(), 'H:i:s');

      return response()->view('redirect.show3')->cookie('time', $time);
    } else {
      $datetime1 = now();
      $datetime2 = new DateTime($request->cookie('time'));
      $interval = $datetime1->diff($datetime2);
      $intervalDate = $interval->format('%R%Y лет, %R%M месяцев, %R%D дней, %R%H часов, %R%I минут, %R%S секунд');

      return view('redirect.show3', ['time' => $intervalDate]);
    }
  }

  /**
   * @param Request $request
   * @return View|Response
   */
  public function formCookie(Request $request): View|Response {
    if (!isset($request))
      return view('redirect.form-cookie');
    else {
      $birthday = $request->birthday;
      return response()->view('redirect.form-cookie')->cookie('birthday', $birthday);
    }
  }

  /**
   * @param Request $request
   * @return View
   */
  public function showBirthday(Request $request): View {
    $birthdayUser = substr($request->cookie('birthday'), 0, 5);
    $now = date_format(now(), 'd.m');
    if ($birthdayUser == $now)
      $birthday = 'Happy birthday to you)))';
    else
      $birthday = null;

    return view('redirect.show-birthday', ['birthday' => $birthday]);
  }

  /**
   * @param Request $request
   * @return Response
   */
  public function counterCookie(Request $request): Response {
    $counter = $request->cookie('counter', 1);
    return response()->view('redirect.counter', ['counter' => $counter])->cookie('counter', ++$counter);;
  }
}