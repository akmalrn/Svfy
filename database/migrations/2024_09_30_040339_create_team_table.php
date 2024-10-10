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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->string('username');
            $table->string('position');
            $table->string('phone_number')->nullable();
            $table->string('address');
            $table->string('email_address');
            $table->text('link_facebook')->nullable();
            $table->text('link_twitter')->nullable();
            $table->text('link_instagram')->nullable();
            $table->text('link_linkedin')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
