<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd', function (Blueprint $table) {
            $table->increments('id_bd');
            $table->string('title_bd');
            $table->string('tom_bd');
            $table->integer('favorite_bd');
            $table->unsignedInteger('id_category');
            $table->unsignedInteger('id_editor');
            $table->timestamps();

            $table->foreign('id_category')
               ->references('id_category')->on('category')
               ->onDelete('cascade');

            $table->foreign('id_editor')
                ->references('id_editor')->on('editor')
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
        Schema::dropIfExists('bd');
    }
}
