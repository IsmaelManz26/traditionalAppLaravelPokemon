<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// crea una clase sin nombre heredada de Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // se ejecuta cuando se realiza la migración
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->decimal('price', 9, 2);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

     // se ejecuta cuando se elimina
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
