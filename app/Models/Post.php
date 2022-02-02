<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Post
 * @package App\Models
 *
 * @property int $id
 * @property  string $title
 * @property  string $description
 * @property  string text
 * @property  string date_publication
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Post $post
 * @property Post[] $posts
 *
 * @method static create(array $array)
 * @method static orderBy(string $string, string $dir)
 * @method static findOrFail(int $post)
 *
 */
class Post extends Model {
  use HasFactory;

  /**
   * @var string
   */
  protected $table = 'posts';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'description',
    'text',
    'date_publication',
  ];

  /**
   * The attribute provides a convenient method of converting attributes to common data types
   *
   * @var array
   */
  protected $casts = [
    'title' => 'string',
    'description' => 'string',
    'text' => 'string',
    'date_publication' => 'string',
  ];
}
