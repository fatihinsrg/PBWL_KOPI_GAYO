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
        Schema::create('stok_kopi', function (Blueprint $table) {
            $table->increments('stok_id');
            $table->string('nama_stok', 50);
            $table->string('harga_stok', 50);
            $table->string('jumlah_stok', 50);
            $table->text('deskripsi_stok');
            $table->integer('stok_id_supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_kopi');
    }
};
