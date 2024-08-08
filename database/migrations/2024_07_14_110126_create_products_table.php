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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price')->index();
            $table->integer('size')->index();
            $table->string('img');
            $table->integer('verh');
            $table->integer('pidoshva');
            $table->integer('pidkladka');
            $table->integer('color')->index();
            $table->integer('brand')->index();
            $table->text('description');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
