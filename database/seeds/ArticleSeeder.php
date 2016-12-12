<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();

        for ($i=0; $i < 10; $i++) {
            \App\Article::create([
                'title'   => 'Title：Article Title ___>'.$i,
                'body'    => 'Body: Article Body___> '.$i,
                'publish_date' => date("Y-m-d H:i:s",time()),
                'sections' => 'section',
                'image_address' => 'http://img05.tooopen.com/images/20150831/tooopen_sy_140882811451.jpg'
            ]);
        }
    }
}
