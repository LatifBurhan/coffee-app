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
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email'); // Buat kirim notif status (opsional)
        $table->string('phone');
        $table->date('date');    // Tanggal Booking
        $table->time('time');    // Jam Booking
        $table->integer('guests'); // Jumlah Orang
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
