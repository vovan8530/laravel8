<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller {

  /**
   * @return string
   */
  public function index(): string {
    return 'Page Controller index';
  }

  /**
   * @param int $page
   * @return string
   */
  public function show(int $page): string {
    $pages = [
      1 => 'страница 1',
      2 => 'страница 2',
      3 => 'страница 3',
      4 => 'страница 4',
      5 => 'страница 5'
    ];
    isset($pages[$page]) ? $res = $pages[$page] : $res = 'not page ';
    return $res;
  }

  /**
   * @param int $inp1
   * @param int $inp2
   * @param int $inp3
   * @param string $style
   * @return View
   */
  public function showInput(int $inp1, int $inp2, int $inp3, string $style): View {
    $text = 'link';
    $href = 'https://google.com';
    return view('page.show-inp', ['inp1' => $inp1, 'inp2' => $inp2, 'inp3' => $inp3, 'style' => $style, 'text' => $text, 'href' => $href]);
  }
}
