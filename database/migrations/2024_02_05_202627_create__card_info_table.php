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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table ->string('cardType');
            $table ->string('attribute');
            $table ->string('name');
            $table ->string('level');
            $table ->string('rank');
            $table ->string('image');
            $table ->string('type');
            $table ->string('subType');
            $table ->string('description');
            $table ->string('stats');
            $table ->string('code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};