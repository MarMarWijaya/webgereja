<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renungan', function (Blueprint $table) {
            $table->increments('idRenungan');
            $table->longtext('judul');
            $table->timestamp('tanggal');
            $table->longtext('isi');
            $table->binary('lampiran');
            $table->unsignedInteger('nij');
            $table->foreign('nij')->references('nij')->on('jemaat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renungan');
    }
}
