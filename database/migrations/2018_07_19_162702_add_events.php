<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            
        });
        
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
        
        DB::table('events')->delete([
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
