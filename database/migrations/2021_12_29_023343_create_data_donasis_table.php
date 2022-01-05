<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_donasis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_donasi')->unsigned();
            $table->string('nm_donatur');
            $table->bigInteger('nominal')->unsigned();
            $table->date('tanggal');
            $table->bigInteger('norek')->unsigned();
            $table->string('nm_bank');
            $table->string('pemilik_rek');
            $table->bigInteger('telepon')->unsigned();
            $table->string('keterangan');
            // // fk id_donatur
            // $table->foreign('id_donasi')->references('id')
            //     ->on('donasis')->onUpdate('cascade')
            //     ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_donasis');
    }
}
