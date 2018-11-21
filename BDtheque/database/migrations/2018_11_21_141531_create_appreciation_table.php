<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppreciationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appreciation', function (Blueprint $table) {
            $table->increments('id_appreciation');
            $table->string('comment_appreciation');
            $table->unsignedInteger('score_appreciation');
            $table->unsignedInteger('id_bd');
            $table->timestamps();

            $table->foreign('id_bd')
                ->references('id_bd')->on('bd')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appreciation');
    }
}
