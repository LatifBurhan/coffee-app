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
    // Nama tabel kita set 'job_vacancies'
    Schema::create('job_vacancies', function (Blueprint $table) {
        $table->id();
        $table->string('title');       // Judul Lowongan
        $table->string('type');        // Full Time / Part Time
        $table->text('description');   // Deskripsi
        $table->boolean('is_active')->default(true); // Status
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('job_vacancies');
}
};
