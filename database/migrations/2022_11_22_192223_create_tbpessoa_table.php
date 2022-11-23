<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpessoa', function (Blueprint $table) {
            $table->id('idPessoa');
            // $table->integer('user_id')->unsigned();

            // $table->integer('idUsuario');
            $table->string('nome');
            $table->integer('idade');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });

        // Schema::create('tbpessoa', function (Blueprint $table) {

        //     $table->foreign('user_id')->references('idUsuario')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbpessoa');
    }
};
