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
    Schema::create('pengajian', function (Blueprint $table) {
        $table->id();
        $table->enum('waktu', ['siang', 'malam']); // kategori
        $table->time('jam'); // format jam lebih tepat gunakan TIME
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajian');
    }
};
