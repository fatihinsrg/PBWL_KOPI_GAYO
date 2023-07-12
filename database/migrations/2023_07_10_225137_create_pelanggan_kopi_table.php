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
        Schema::create('pelanggan_kopi', function (Blueprint $table) {
            $table->increments('pelanggan_id');
            $table->string('nama_pelanggan', 50);
            $table->text('alamat_pelanggan');
            $table->string('nomor_pelanggan', 20);
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan_kopi');
    }
};
