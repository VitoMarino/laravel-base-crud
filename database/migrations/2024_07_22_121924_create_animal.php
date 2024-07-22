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
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description', 600);
            $table->string('species', 50);
            // $table->timestamps(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
