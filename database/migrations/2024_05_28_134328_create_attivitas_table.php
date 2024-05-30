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
        Schema::create('attivitas', function (Blueprint $table) {
            $table->id();
            $table->string('corso');
            $table->string('descrizione');
            $table->integer('posti disponibili');
            $table->timestamps();
            $table->string('img_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attivitas');
    }
};
