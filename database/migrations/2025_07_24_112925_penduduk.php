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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('dusun');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->unsignedBigInteger('rw_id');
            $table->unsignedBigInteger('rt_id');
            $table->timestamps();
            $table->foreign('rw_id')->references('id')->on('rws')->onDelete('cascade');
            $table->foreign('rt_id')->references('id')->on('rts')->onDelete('cascade');

            
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
