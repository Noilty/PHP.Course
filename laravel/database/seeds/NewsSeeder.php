<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\News::class, 10)->create();
        //DB::table('news')->insert($this->getData());
    }

    /*private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(10,50)),
                'text' => $faker->realText(rand(1000,2000)),
                'isPrivate' => false,
            ];
        }

        return $data;
    }*/
}
