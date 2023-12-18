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
        Schema::create('register_colleges', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('alamatKtp');
            $table->string('alamatSekarang');
            $table->string('kecamatanSekarang');
            $table->string('kabupatenSekarang');
            $table->string('provinsiSekarang');
            $table->string('noHp');
            $table->string('email')->unique();
            $table->string('kewarganegaraan');
            $table->string('tanggalLahir');
            $table->string('tempatLahir');
            $table->string('kabupatenLahir');
            $table->string('provinsiLahir');
            $table->string('negaraLahir')->nullable();
            $table->enum('jenisKelamin', ['pria', 'wanita']);
            $table->enum('status', ['belum menikah', 'menikah', 'lain-lain']);
            $table->enum('agama', ['islam', 'hindu', 'katolik', 'kristen', 'budha', 'lain-lain']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_colleges');
    }
};
