<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class ShopCategory
 * @package App\Models
 *
 * @property  string $title
 */
class ShopCategory extends Model {
  use HasFactory, GetTableName, NodeTrait;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'shop_categories';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    '_lft',
    '_rgt',
    'title',
    'parent_id',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    '_lft' => 'integer',
    '_rgt' => 'integer',
    'title' => 'string',
    'parent_id' => 'integer',
  ];
}
