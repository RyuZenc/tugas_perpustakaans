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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('nim');
            $table->integer('kode_buku');
        });
    }

    //feri love mila
    //priscar love arika

    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
