<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller {

  /**
   * @var array[]
   */
  private array $employees;

  /**
   * @var array|array[]
   */
  private array $arrEmployees = [
    [
      'name' => 'user1',
      'surname' => 'surname1',
      'salary' => 1000,
    ],
    [
      'name' => 'user2',
      'surname' => 'surname2',
      'salary' => 2000,
    ],
    [
      'name' => 'user3',
      'surname' => 'surname3',
      'salary' => 3000,
    ],
  ];

  public function __construct() {
    $this->employees = [
      1 => [
        'name' => 'user1',
        'surname' => 'surname1',
        'salary' => 1000,
      ],
      2 => [
        'name' => 'user2',
        'surname' => 'surname2',
        'salary' => 2000,
      ],
      3 => [
        'name' => 'user3',
        'surname' => 'surname3',
        'salary' => 3000,
      ],
      4 => [
        'name' => 'user4',
        'surname' => 'surname4',
        'salary' => 4000,
      ],
      5 => [
        'name' => 'user5',
        'surname' => 'surname5',
        'salary' => 5000,
      ],
    ];
  }

  /**
   * @return View
   */
  public function index(): View {
    return view('employee.index', ['employees' => $this->employees]);
  }

  /**
   * @param int $employee
   * @param string $field
   * @return string|int
   */
  public function showField(int $employee, string $field): string|int {
    return $this->employees[$employee][$field];
  }

  /**
   * @param int $employee
   * @return View
   */
  public function show(int $employee): View {
    $name = $this->employees[$employee]['name'];
    $surname = $this->employees[$employee]['surname'];

    return view('employee.show', ['name' => $name, 'surname' => $surname, 'arrEmployees' => $this->arrEmployees]);
  }

  /**
   * @param string $name
   * @param string $surname
   * @param int $salary
   * @param string $class
   * @return View
   */
  public function showVar(string $name, string $surname, int $salary, string $class): View {
    return view('employee.show-var', ['name' => $name, 'surname' => $surname, 'salary' => $salary, 'class' => $class]);
  }
}
