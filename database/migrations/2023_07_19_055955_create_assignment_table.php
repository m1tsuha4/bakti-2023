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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_member')->references('id')->on('profile')->onDelete('cascade');
            $table->string('tugas1')->nullable();
            $table->date('tanggal_pengumpulan1')->nullable();
            $table->string('status1')->default('Belum Dikumpulkan');
            $table->string('tugas2')->nullable();
            $table->date('tanggal_pengumpulan2')->nullable();
            $table->string('status2')->default('Belum Dikumpulkan');
            $table->string('tugas3')->nullable();
            $table->date('tanggal_pengumpulan3')->nullable();
            $table->string('status3')->default('Belum Dikumpulkan');
            $table->string('tugas4')->nullable();
            $table->date('tanggal_pengumpulan4')->nullable();
            $table->string('status4')->default('Belum Dikumpulkan');
            $table->string('tugas5')->nullable();
            $table->date('tanggal_pengumpulan5')->nullable();
            $table->string('status5')->default('Belum Dikumpulkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment');
    }
};
