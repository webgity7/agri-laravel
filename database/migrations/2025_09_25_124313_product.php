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
        Schema::create('product',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->decimal('price',8,2);
            $table->string('description');
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id')->nullable();
            $table->string('availability');
            $table->string('image');
            $table->string('special');
            $table->string('featured');
            $table->string('deleted');
            $table->timestamp('created');
            $table->timestamp('updated');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
