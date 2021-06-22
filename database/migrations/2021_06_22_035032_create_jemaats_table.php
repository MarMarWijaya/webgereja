<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemaatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemaat', function (Blueprint $table) {
            $table->increments('nij');
            $table->text('password');
            $table->text('nama');
            $table->string('gender');
            $table->text('alamat');
            $table->text('ttl');
            $table->string('hp');
            $table->text('nama_ayah');
            $table->text('nama_ibu');
            $table->text('nama_pasangan');
            $table->string('gol_darah');
            $table->timestamps();
            $table->unsignedInteger('idDesa');
            $table->foreign('idDesa')->references('idDesa')->on('desa');
            $table->unsignedInteger('idHome');
            $table->foreign('idHome')->references('idHome')->on('home');
            $table->unsignedInteger('idMentor');
            $table->foreign('idMentor')->references('nij')->on('jemaat');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jemaat');
    }
}
