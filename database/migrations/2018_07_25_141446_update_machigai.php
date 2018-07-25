<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMachigai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
        
        DB::table('events')->where('name', '=', '大相撲　渋谷青山学院場所')->update(['place' => '青山学院記念館']);
        DB::table('events')->where('name', '=', 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶')->update(['place' => '上狛茶問屋ストリート']);
        DB::table('events')->where('name', '=', 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶')->update(['price' => '当日800円(前売り700円)']);
        DB::table('events')->where('name', '=', '銀バル~スペインの旅~')->update(['description' => '1枚1000円の券で、スペイングルメ・ワインの、ワンフード・ワンドリンクを楽しめます。8月11日まで開催予定。']);
        DB::table('events')->where('name', '=', '恐竜どうぶつ園 ティラノサウルス×トリケラトプスの戦い')->delete();

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
    }
}
