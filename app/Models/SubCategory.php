<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubCategory
 * @package App\Models
 *
 * @property  string $title
 * @property  string $description
 */
class SubCategory extends Model {
  use HasFactory, GetTableName;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'sub_categories';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'description',
  ];

  /**
   * Get products for SubCategory
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function products() {
    return $this->hasMany(Product::class);
  }

  /**
   *  Get category for SubCategory
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function category() {
    return $this->belongsTo(Category::class);
  }
}
