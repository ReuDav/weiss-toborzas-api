<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kitolto_adatai', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('browser')->nullable();
            $table->string('browser_version')->nullable();
            $table->string('os')->nullable();
            $table->string('platform')->nullable();
            $table->string('language')->nullable();
            $table->string('timezone')->nullable();
            $table->boolean('online')->nullable();
            $table->integer('screen_width')->nullable();
            $table->integer('screen_height')->nullable();
            $table->integer('color_depth')->nullable();
            $table->integer('hardware_concurrency')->nullable();
            $table->timestamp('created_at_client')->nullable();
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kitolto_adatai');
    }
};
