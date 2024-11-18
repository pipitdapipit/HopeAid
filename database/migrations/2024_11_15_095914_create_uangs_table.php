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
        Schema::create('uangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donasi_id');
            $table->integer('nominal');
            $table->string('tipe_pembayaran');
            

            $table->foreign('donasi_id')->references('id')->on('donasis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uangs');
    }
};
