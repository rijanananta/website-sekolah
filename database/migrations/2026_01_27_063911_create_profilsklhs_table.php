<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('profilsklhs', function (Blueprint $table) {
        $table->id();
        $table->text('visi'); // Wajib ada baris ini
        $table->text('misi'); // Wajib ada baris ini
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profilsklhs');
    }
};
