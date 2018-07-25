<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteMachigai extends Migration
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
        
        DB::table('events')->where('name', '=', 'ねぶた祭り')->update(['place' => '青森市周辺']);
        DB::table('events')->where('name', '=', '大相撲　渋谷青山学院場所')->update(['name' => '大相撲　渋谷青山学院場所']);
        DB::table('events')->where('name', '=', '銀バル~スペインの旅~')->update(['price' => '4000円(チケット4枚分)'], ['description' => '1枚1000円の券で、スペイングルメ・ワインの、ワンフード・ワンドリンクを楽しめます。8月11日まで開催予定。']);
        DB::table('events')->where('name', '=', 'Fight!～FOOD×ENTERTAINMENT BATTLE')->update(['description' => '繊細なアートとコラボした日本食など、食とエンターテインメントが楽しめるグルメフェスです。8月26日まで開催予定。']);
        DB::table('events')->where('name', '=', 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶')->update(['time' => '10:00~15:00']);
        DB::table('events')->where('name', '=', 'ジャイガ (Rock)')->update(['place' => '舞洲スポーツアイランド　太陽の広場ジャイガ特設会場']);
        DB::table('events')->where('name', '=', 'オラハ☆ブレイク’18夏')->update(['name' => 'オハラ☆ブレイク’18夏']);
        DB::table('events')->where('name', '=', 'EAT THE ROCK')->update(['description' => '竜王町総合運動公園内ドラゴンハット","音楽フェス","無料！無料！無料！もう度言います。無料です！！！毎年1万人弱を動員する音楽と食のフェスが今年も滋賀で開催されます。滋賀県をはじめ関西の広域から様々な店舗が出店いたします。音楽と食で地域と人のつながりの大切さを感じながら、楽しい時間を最高の仲間と！']);
        DB::table('events')->where('name', '=', 'EARTH CELEBRATION')->update(['place' => '佐渡市小木　佐渡全体']);
        DB::table('events')->where('name', '=', 'a-nation 東京')->update(['price' => '9800円~']);
        
        
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
