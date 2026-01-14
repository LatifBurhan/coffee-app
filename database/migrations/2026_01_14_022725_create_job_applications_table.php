<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('job_applications', function (Blueprint $table) {
        $table->id();
        // Menghubungkan dengan tabel job_vacancies yang sudah ada
        $table->foreignId('job_id')->constrained('job_vacancies')->onDelete('cascade');

        // Data Diri Pelamar
        $table->string('name');
        $table->string('email');
        $table->string('phone');

        // Data Lamaran
        $table->text('cover_letter')->nullable(); // Surat lamaran (opsional)
        $table->string('cv_path'); // Lokasi file CV tersimpan
        $table->string('status')->default('pending'); // pending, interview, accepted, rejected

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
