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
    	factory(App\Models\Tag::class, 10)->create();
    	factory(App\Models\ArticleTag::class, 10)->create();
    }
}


