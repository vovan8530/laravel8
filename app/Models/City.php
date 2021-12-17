<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model {
  use HasFactory, GetTableName;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'cities';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'title' => 'string',
  ];

  /**
   * Get users for City
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function users() {
    return $this->belongsToMany(User::class)->withTimestamps();
  }
}
