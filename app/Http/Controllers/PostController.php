<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller {

  /**
   * @var \string[][]
   */
  private array $posts = [];

  public function __construct() {
    $this->posts = [
      1 => [
        'title' => 'Тайтл страницы 1',
        'author' => 'Автор страницы 1',
        'date' => 'Дата публикации страницы 1',
        'teaser' => 'Короткое описание страницы 1',
        'text' => 'Полный текст страницы 1',
      ],
      2 => [
        'title' => 'Тайтл страницы 2',
        'author' => 'Автор страницы 2',
        'date' => 'Дата публикации страницы 2',
        'teaser' => 'Короткое описание страницы 2',
        'text' => 'Полный текст страницы 2',
      ],
      3 => [
        'title' => 'Тайтл страницы 3',
        'author' => 'Автор страницы 3',
        'date' => 'Дата публикации страницы 3',
        'teaser' => 'Короткое описание страницы 3',
        'text' => 'Полный текст страницы 3',
      ],
      4 => [
        'title' => 'Тайтл страницы 4',
        'author' => 'Автор страницы 4',
        'date' => 'Дата публикации страницы 4',
        'teaser' => 'Короткое описание страницы 4',
        'text' => 'Полный текст страницы 4',
      ],
      5 => [
        'title' => 'Тайтл страницы 5',
        'author' => 'Автор страницы 5',
        'date' => 'Дата публикации страницы 5',
        'teaser' => 'Короткое описание страницы 5',
        'text' => 'Полный текст страницы 5',
      ],
    ];
  }

  /**
   * @param int $post
   * @return View
   */
  public function show(int $post): View {
//    if (isset($this->posts[$post])) {
//      return view('posts.show', ['post' => $this->posts[$post]]);
//    } else {
//      return view('posts.error', ['id' => $post]);
//    $posts = [1,2,3];
    $post = Post::findOrFail($post);
//    dd($post);
    return view('posts.show', ['post' => $post]);
  }

  /**
   * @param string $dir
   * @return View
   */
  public function index(string $dir = 'desc'): View {
//    $posts = Post::orderByDesc('date_publication')->get();
    $posts = Post::orderBy('date_publication', $dir)->get();
    return view('posts.index', ['posts' => $posts]);
  }

  /**
   * @return View
   */
  public function create(): View {
    return view('posts.edit');
  }

}
