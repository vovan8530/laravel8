<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 *
 * @property  string $title
 * @property  string $description
 */
class Category extends Model {
  use HasFactory, GetTableName;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'categories';

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
   * Get subCategories for Category
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function subCategories() {
    return $this->hasMany(SubCategory::class);
  }
}
