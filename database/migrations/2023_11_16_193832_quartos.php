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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('quartos', function (Blueprint $table) {

            $table->id();
            $table->string('numero');
            $table->integer('capacidade');
            $table->decimal('preco_diaria', 8, 2);
            $table->boolean('disponivel')->default(true);
            $table->timestamps();

            });
    }
};
