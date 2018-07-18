<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('moyada', function (Blueprint $table) {
            //
        });
        
        DB::table('moyada')->insert(
            array(
                'content' => 'yadayadayada'
            ),
            array(
                'content' => 'yada'
            ),
            array(
                'content' => 'yadayada'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('moyada', function (Blueprint $table) {
            //
        });
        
        DB::table('moyada')->delete(
            array(
                'content' => 'yadayadayada'
            ),
            array(
                'content' => 'yada'
            ),
            array(
                'content' => 'yadayada'
            )
        );
    }
}
