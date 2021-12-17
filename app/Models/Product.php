<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 *
 * @property  string $title
 * @property  string $description
 * @property  float $price
 * @property  int $quantity
 */
class Product extends Model {
  use HasFactory, GetTableName;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'products';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'description',
    'price',
    'quantity',
  ];

  /**
   * Get Category for Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function subCategory() {
    return $this->belongsTo(SubCategory::class);
  }
}
