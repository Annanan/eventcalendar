<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        [
          'name' => 'テストイベント',
          'eventdate' => '1',
          'time' => '15:00',
          'prefecture' => '東京',
          'place' => '世田谷区',
          'genre' => '映画',
          'description' => 'テストです',
          'price' => '無料',
          'genrenum' => '1',
          'prefecturenum' => '13',
        ],
        [
          'name' => 'テストイベント',
          'eventdate' => '2',
          'time' => '15:00',
          'prefecture' => '東京',
          'place' => '世田谷区',
          'genre' => '映画',
          'description' => 'テストです',
          'price' => '無料',
          'genrenum' => '1',
          'prefecturenum' => '13',
        ],
        [
          'name' => 'テストイベント',
          'eventdate' => '3',
          'time' => '15:00',
          'prefecture' => '東京',
          'place' => '世田谷区',
          'genre' => '映画',
          'description' => 'テストです',
          'price' => '無料',
          'genrenum' => '1',
          'prefecturenum' => '13',
        ],
      ]);
    }
}
