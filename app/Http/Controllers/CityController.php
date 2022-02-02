<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CityController extends Controller {

  /**
   * @var array
   */
  private array $location = [
    1 => ['country' => 'Ukraine', 'city' => 'Kiev'],
    2 => ['country' => 'Poland', 'city' => 'Warshawa'],
    3 => ['country' => 'USA', 'city' => 'Washington'],
    4 => ['country' => 'Mexico'],
    5 => ['city' => 'New York'],
  ];

  /**
   * @param string|null $city
   * @return View
   */
  public function show(string $city = null): View {
    $year = '1985';
    $month = '07';
    $day = '01';
    $str = '<b>Hello world</b>';

    $title = 'title city';
    $aside = '<p>end</p>';


    return view('city.show', [
      'city' => $city,
      'location' => $this->location,
      'year' => $year,
      'moth' => $month,
      'day' => $day,
      'str' => $str,
      'title'=>$title,
      'aside' => $aside
    ]);
  }
}
