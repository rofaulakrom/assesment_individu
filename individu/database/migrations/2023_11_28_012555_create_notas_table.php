<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->id();
            $table->string('kodenota')->unique();
            $table->unsignedBigInteger('kodetenan');
            $table->foreign('kodetenan')->references('id')->on('tenan')->onDelete('cascade');
            $table->unsignedBigInteger('kodekasir');
            $table->foreign('kodekasir')->references('id')->on('kasirs')->onDelete('cascade');
            $table->date('tanggalnota');
            $table->time('jamnota');
            $table->decimal('jumlahbelanja', 10, 2);
            $table->decimal('diskon', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            // Tambahkan kolom lain sesuai kebutuhan
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
        Schema::dropIfExists('nota');
    }
};