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
        // Drop the table if it already exists
        if (Schema::hasTable('tanggapan')) {
            Schema::dropIfExists('tanggapan');
        }

        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan'); // Automatically creates a primary key with auto increment
            $table->unsignedBigInteger('id_pengaduan');
            $table->unsignedBigInteger('id_petugas');
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
