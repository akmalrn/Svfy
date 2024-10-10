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
        Schema::create('konfigurasi', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('nama_website')->nullable();
            $table->string('logo_title')->nullable();
            $table->string('nama_title')->nullable();
            $table->string('path_aside')->nullable();
            $table->string('aside')->nullable();
            $table->string('aside2')->nullable();
            $table->string('nama_instagram')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('nama_facebook')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('nama_twitter')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('nama_linkedin')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('alamat')->nullable()->nullable();
            $table->string('description_footer')->nullable();
            $table->string('footer')->nullable();
            $table->string('timetable')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfigurasi');
    }
};
