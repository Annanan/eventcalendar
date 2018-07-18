<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoyadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moyada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->timestamps();
            
            
        });
        
        DB::table('moyada')->insert(
            array(
                'content' => 'yadayadayada',
                'content' => 'yaaaaaaadaaaaaaa'
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
        Schema::dropIfExists('moyada');
    }
}
