<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            // Tambahkan kolom sesuai kebutuhan
            $table->string('kodebarang');
            $table->string('namabarang');
            $table->string('satuan');
            $table->decimal('hargasatuan', 10, 2);
            $table->integer('stok');
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
        Schema::dropIfExists('barang');
    }
};
