<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// php artisan make:migration create_books_table --create="books"

// php artisan make:migration create_books_table --table="books"

// database migrations declare structures for Models

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // Book
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->text('teaser')->nullable(); // can be empty on a new data row
            $table->text('body');
            $table->timestamps(); // created_at updated_at
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
