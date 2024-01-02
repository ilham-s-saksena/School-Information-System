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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->references('id')->on('siswas');
            $table->string('jenis');
            $table->integer('tanggungan');
            $table->integer('kelas');
            $table->integer('Januari')->default('0');
            $table->integer('Februari')->default('0');
            $table->integer('Maret')->default('0');
            $table->integer('April')->default('0');
            $table->integer('Mei')->default('0');
            $table->integer('Juni')->default('0');
            $table->integer('Juli')->default('0');
            $table->integer('Agustus')->default('0');
            $table->integer('September')->default('0');
            $table->integer('Oktober')->default('0');
            $table->integer('November')->default('0');
            $table->integer('Desember')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
