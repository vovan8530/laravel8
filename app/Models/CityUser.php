<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityUser extends Model {
  use HasFactory, GetTableName;
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'city_user';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id',
    'city_id',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'user_id' => 'integer',
    'city_id' => 'integer',
  ];

  /**
   * Get users for cityUsers
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function users(){
    return $this->belongsTo(User::class);
  }

  /**
   * Get cities for cityUsers
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function cities(){
    return $this->belongsTo(City::class);
  }
}
