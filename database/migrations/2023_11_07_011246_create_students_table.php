<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void//membuat tabel bari
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('nama');
            $table->foreignId('kelas_id');
            $table->date('tgl_lahir');
            $table->text('alamat');
            

            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void//drop tabel yg baru
    {
        Schema::dropIfExists('students');
    }
};
