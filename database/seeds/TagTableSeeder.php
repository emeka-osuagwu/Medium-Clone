<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Models\Tag::class, 100)->create();
    	factory(App\Models\ArticleTag::class, 100)->create();
    }
}


