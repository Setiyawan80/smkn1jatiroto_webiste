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
        Schema::create('user_profils', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel users. Jika user dihapus, profilnya otomatis terhapus (cascade)
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            // Detail biodata (dibuat nullable agar tidak wajib diisi semua di awal)
            $table->string('nisn_nip')->nullable()->comment('NISN untuk siswa, NIP untuk guru');
            $table->string('status_jabatan');
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('bio')->nullable(); // Cocok untuk bio singkat di profile sekolah
            $table->string('avatar')->nullable(); // Untuk foto profil

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profils');
    }
};
