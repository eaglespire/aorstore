<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('images')->nullable();
            $table->integer('discount')->default(0);
            $table->decimal('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('SKU')->nullable();
            $table->string('slug')->unique();
            $table->string('cover_image')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
