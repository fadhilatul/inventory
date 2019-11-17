<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('kondisi',['baik','rusak']);
            $table->text('keterangan');
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_jenis');
            $table->date('tanggal_register');
            $table->unsignedBigInteger('id_ruang');
            $table->string('kode_inventaris');
            $table->timestamps();

            $table->foreign('id_jenis')->references('id')->on('jenis');
            $table->foreign('id_ruang')->references('id')->on('ruangans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
