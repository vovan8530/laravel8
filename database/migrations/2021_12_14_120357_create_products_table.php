<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('description');
      $table->float('price');
      $table->integer('quantity');

      $table->unsignedBigInteger('sub_category_id')->nullable();
      $table->foreign('sub_category_id')->references('id')->on('sub_categories');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('products');
  }
}
