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
        Schema::create('Add', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('no_plat');
            $table->string('jumlah_kapasitas');
            $table->integer('points');
            $table->string('photo') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Add');
    }
};
