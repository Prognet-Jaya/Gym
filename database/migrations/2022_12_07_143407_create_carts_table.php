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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->string('umur')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->string('latihan')->nullable();
            $table->integer('harga')->nullable();
            $table->string('gambar')->nullable();
            $table->string('id_latihan')->nullable();
            $table->string('id_user')->nullable();
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
        Schema::dropIfExists('carts');
    }
};
