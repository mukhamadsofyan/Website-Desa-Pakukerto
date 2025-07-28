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
        Schema::create('modelumkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('nama_pemilik');
            $table->string('jenis_usaha');
        $table->integer('tahun_berdiri');
        $table->json('produk')->nullable();
        $table->text('alamat');
        $table->string('kontak');
        $table->text('deskripsi')->nullable();
        $table->string('tagline')->nullable();
        $table->string('foto')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
