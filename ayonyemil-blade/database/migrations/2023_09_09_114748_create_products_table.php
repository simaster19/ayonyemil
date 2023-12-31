<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
  * Run the migrations.
  */
  public function up(): void
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('kode_produk')->unique();
      $table->string('nama_produk');
      $table->string('jenis_produk');
      $table->string('rasa');
      $table->text('foto_produk')->nullable();
      $table->integer('jumlah_produk');
      $table->integer('harga_produk');
      $table->integer('harga_jual');
      $table->string('berat_produk');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};