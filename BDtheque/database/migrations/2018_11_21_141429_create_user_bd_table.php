<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bd', function (Blueprint $table) {
            $table->unsignedInteger('fk_bd');
            $table->unsignedInteger('fk_user');
            $table->timestamps();

            $table->foreign('fk_bd')
                ->references('id_bd')->on('bd')
                ->onDelete('cascade');
            
            $table->foreign('fk_user')
                ->references('id_user')->on('user')
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
        Schema::dropIfExists('user_bd');
    }
}
