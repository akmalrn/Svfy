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
        Schema::create('konfigurasi_offer', function (Blueprint $table) {
            $table->id();
            $table->string('nav')->nullable();
            $table->string('title')->nullable();
            $table->string('title_include')->nullable();
            $table->string('include')->nullable();
            $table->string('title_include2')->nullable();
            $table->string('include2')->nullable();
            $table->string('title_include3')->nullable();
            $table->string('include3')->nullable();
            $table->string('title_include4')->nullable();
            $table->string('include4')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfigurasi_offer');
    }
};
