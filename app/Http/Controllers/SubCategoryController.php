<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SubCategoryController extends Controller {
  /**
   * Get all subCategories
   *
   * @return \Illuminate\Contracts\View\View
   */
  public function index(): View {
//    $subCategories = SubCategory::all();

    $subCategoriesTbName = SubCategory::getTableName();
    $categoriesTbName = Category::getTableName();
    $subCategories = DB::table($subCategoriesTbName)
      ->join($categoriesTbName, "$subCategoriesTbName.category_id", '=', "$categoriesTbName.id")
      ->select("$subCategoriesTbName.title", "$categoriesTbName.title as category_title")
      ->get();

    return view('sub-categories', ['subCategories' => $subCategories]);
  }
}
