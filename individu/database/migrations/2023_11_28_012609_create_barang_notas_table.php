<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        Schema::create('barangnota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodenota');
            $table->foreign('kodenota')->references('id')->on('nota')->onDelete('cascade');
            $table->unsignedBigInteger('kodebarang');
            $table->foreign('kodebarang')->references('id')->on('barang')->onDelete('cascade');
            $table->integer('jumlahbarang');
            $table->decimal('hargasatuan', 10, 2);
            $table->integer('jumlah');
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
        Schema::dropIfExists('barangnota');
    }
};