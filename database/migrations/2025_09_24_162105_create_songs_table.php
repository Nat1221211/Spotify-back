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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedInteger('durada');
            $table->unsignedInteger('album_id');
            $table->unsignedInteger('views');
            $table->date('data');
            $table->unsignedInteger('Genres_id');
            $table->string('tipus');
            $table->string('logo_img')->nullable();
            $table->string('background_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
