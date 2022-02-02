<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TestController extends Controller {

  /**
   * @var array
   */
  private array $arr = [1 => 'Vova', 2 => 36, 3 => 1200, 4 => 'uk'];
//  private array $arr = [];

  /**
   * @var array|int
   */
  private array|int $date = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
//  private array|int $date = 45;
//  private array|int $date = [];

  /**
   * @var \string[][]
   */
  private array $links = [];

  /**
   * @var array
   */
  private array $users = [];

  /**
   * @var array
   */
  private array $inputs = [];

  public function __construct() {
    $this->links = [
      [
        'text' => 'text1',
        'href' => 'href1',
      ],
      [
        'text' => 'text2',
        'href' => 'href2',
      ],
      [
        'text' => 'text3',
        'href' => 'href3',
      ],
    ];

    $this->users = [
      [
        'name' => 'user1',
        'surname' => 'surname1',
        'banned' => true,
      ],
      [
        'name' => 'user2',
        'surname' => 'surname2',
        'banned' => false,
      ],
      [
        'name' => 'user3',
        'surname' => 'surname3',
        'banned' => true,
      ],
      [
        'name' => 'user4',
        'surname' => 'surname4',
        'banned' => false,
      ],
      [
        'name' => 'user5',
        'surname' => 'surname5',
        'banned' => false,
      ],
    ];

    $this->inputs = ['input1', 'input2', 'input3', 'input4'];
  }

  /**
   * @param int $num
   * @return View
   */
  public function show(int $num = 1): View {
    $day = date_format(now(), 'd');
    return view('test.show', [
      'num' => $num,
      'isUngarAge' => $this->isUngarAge($num),
      'arr' => $this->arr,
//      'data' => array_chunk($this->date, 5),
      'data' => $this->date,
      'day' => $day,
      'links' => $this->links,
      'users' => $this->users,
      'inputs' => $this->inputs,
    ]);

  }

  /**
   * @param Request $request
   * @return View
   */
  public function form(Request $request): View {
    $request->flash();
//    if ($request->isMethod('get'))
    return view('test.form');
//    else
//      return view('test.result', ['request' => $request->except('_token')]);
//      return view('test.result', ['request' => $request->only('num1', 'num2')]);
//      return view('test.result', ['request' => $request->input()]);
//      return view('test.result', ['request' => $request->only('name', 'email')]);
  }

  /**
   * @param Request $request
   * @param int $id
   * @return View
   */
  public function result(Request $request, int $id): View {
//    $request->session()->put('time', date_format(now(), 'h:i:s'));
//    $request->session()->put('arr', [1, 2, 3]);
    $request->session()->flash('name', 'Maks');

//    dd($request->session()->get('name'));
    return view('test.result', ['request' => $request->only('name', 'email'), 'id' => $id]);
  }

  /**
   * @param Request $request
   * @return View
   */
  public function method(Request $request): View {
//    $request->session()->push('arr', 4);
//    $request->session()->push('arr', 5);
////    $request->session()->forget('date');

//    session(['salary' => 1200]);

    $name = session()->get('name');

//    $arr = $request->session()->pull('arr');
//    $request->session()->flush();
//    dd(session()->all());
//    if($request->session()->has('date')){
//      $date = $request->session()->get('date');
    return view('test.method', ['name' => $name]);
//    }

//    dd($request->is('test/method*'));
  }

  /**
   * @return Response
   */
  public function showResponse(): Response {
    return response('Nice to meet you', 202)->withHeaders([
      'X-Header-One' => 'Header Value',
      'X-Header-Two' => 'Header Value',
    ]);
  }

  /**
   * @param int $age
   * @return bool
   */
  private function isUngarAge(int $age): bool {
    return $age >= 18;
  }
}
