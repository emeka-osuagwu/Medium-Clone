<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Models\Media::class, 100)->create();
    	factory(App\Models\ArticleMedia::class, 100)->create();
    }
}


