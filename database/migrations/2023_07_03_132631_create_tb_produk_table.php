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
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->increments('produk_id');
            $table->foreignId('produk_id_user')->nullable();
            $table->foreignId('produk_id_gol')->nullable();
            $table->string('produk_no', 20);
            $table->string('produk_nama', 50);
            $table->string('produk_harga');
            $table->string('produk_stok', 20);
            $table->string('produk_keterangan', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produk');
    }
};
