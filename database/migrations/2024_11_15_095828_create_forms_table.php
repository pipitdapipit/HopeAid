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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('donasi_id');
            $table->string('name');
            $table->string('email');
            $table->string('no_telp');
            // $table->string('address');
            // $table->bigInteger('NIK');
            $table->integer('nominal')->nullable();
            $table->string('photo')->nullable();
            $table->string('tipe_barang')->nullable();
            $table->longText('notes');
            // $table->unsignedBigInteger('jenis_donasi_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('donasi_id')->references('id')->on('donasis')->onDelete('cascade');
            // $table->foreign('jenis_donasi_id')->references('id')->on('jenis_donasis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
