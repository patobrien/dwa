<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'teaser' => 'lorem ipsum teaser nullable',
        'body' => 'lorem ipsum body nullable',
        'published_at' => 1925,
      ]);
    }
}
