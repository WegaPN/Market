<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('nama_barang');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('desc');
            $table->string('ukuran')->nullable();
            $table->string('bahan')->nullable();
            $table->string('warna')->nullable();
            $table->string('harga');
            $table->integer('stok')->nullable();
            $table->timestamp('ditambahkan')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
