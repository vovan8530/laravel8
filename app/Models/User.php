<?php

namespace App\Models;

use App\Models\Helpers\GetTableName;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Models
 *
 * @property int $id
 * @property string name
 * @property int $age
 * @property int $salary
 * @property User[]|Collection $users
 * @property User $user
 */
class User extends Model {
  use HasFactory, GetTableName;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name',
    'email',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'name' => 'string',
  ];

  /**
   * Get cities for user
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function cities() {
    return $this->belongsToMany(City::class)->withTimestamps();
  }

}
