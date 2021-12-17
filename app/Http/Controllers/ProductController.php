<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller {
  /**
   * Get all products
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function index(): View {
//    $products = Product::all();

    $categoriesTbName = Category::getTableName();
    $subCategoriesTbName = SubCategory::getTableName();
    $productsTbName = Product::getTableName();
    $products = DB::table($productsTbName)
      ->join($subCategoriesTbName, "$productsTbName.sub_category_id", '=', "$subCategoriesTbName.id")
      ->join($categoriesTbName, "$subCategoriesTbName.category_id", '=', "$categoriesTbName.id")
      ->select("$productsTbName.title", "$subCategoriesTbName.title as sub_category_title", "$categoriesTbName.title as category_title")
      ->get();
//    dd($products);

    return view('products', ['products' => $products]);
  }

}
