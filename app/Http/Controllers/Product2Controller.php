<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Product2Controller extends Controller {

  /**
   * @var array[]
   */
  private array $categories = [];

  public function __construct() {
    $this->categories = [
      1 => [
        'name' => 'Категория 1',
        'products' => [
          1 => [
            'name' => 'Продукт 1',
            'cost' => '300',
            'inStock' => true,
            'desc' => 'Описание продукта 1'
          ],
          2 => [
            'name' => 'Продукт 2',
            'cost' => '400',
            'inStock' => true,
            'desc' => 'Описание продукта 2'
          ],
          3 => [
            'name' => 'Продукт 3',
            'cost' => '500',
            'inStock' => false,
            'desc' => 'Описание продукта 3'
          ],
        ],
      ],
      2 => [
        'name' => 'Категория 2',
        'products' => [
          1 => [
            'name' => 'Продукт 1',
            'cost' => '700',
            'inStock' => true,
            'desc' => 'Описание продукта 1'
          ],
          2 => [
            'name' => 'Продукт 2',
            'cost' => '800',
            'inStock' => false,
            'desc' => 'Описание продукта 2'
          ],
          3 => [
            'name' => 'Продукт 3',
            'cost' => '900',
            'inStock' => false,
            'desc' => 'Описание продукта 3'
          ],
        ],
      ],
    ];
  }

  /**
   * @param int $category
   * @param int $product
   * @return View
   */
  public function show(int $category = 1, int $product = 1): View {
    return view('product2.show', [
      'product' => $this->categories[$category]['products'][$product],
      'categoryName' => $this->categories[$category]['name'],
      'categoryId' => $category,
    ]);
  }

  /**
   * @param int $category
   * @return View
   */
  public function showCategory(int $category): View {
    return view('product2.category-products', ['products' => $this->categories[$category]['products'], 'category' => $category]);
  }

  /**
   * @return View
   */
  public function showCategoryList(): View {
    $categories = array_combine(
      array_map(fn($category) => $category['name'], $this->categories),
      array_map(fn($category) => count($category['products']), $this->categories)
    );
    return view('product2.categories', ['categories' => $categories]);
  }
}
