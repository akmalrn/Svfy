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
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('nav')->nullable();
            $table->string('path')->nullable();
            $table->string('title')->nullable();
            $table->string('overview')->nullable();
            $table->text('description')->nullable();
            $table->text('title_include')->nullable();
            $table->text('include')->nullable();
            $table->text('title_include2')->nullable();
            $table->text('include2')->nullable();
            $table->text('title_include3')->nullable();
            $table->text('include3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutus');
    }
};
