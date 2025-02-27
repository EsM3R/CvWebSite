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
        Schema::create('sorcial_media', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('order_no')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorcial_media');
    }
};