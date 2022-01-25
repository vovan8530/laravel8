<?php

namespace App\Http\Controllers;

use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopCategoryController extends Controller {
  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function index() {
//    $shopCategories = ShopCategory::ancestors();

    $tree= ShopCategory::get()->toTree();


//    dd($tree);

    return view('shop-categories', ['categories' => $tree]);
  }


}
