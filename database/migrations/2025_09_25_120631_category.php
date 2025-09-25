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
        Schema::create('category',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('order')->nullable();
            $table->string('status')->default('Active');
            $table->timestamp('created')->useCurrent();
            $table->timestamp('updated')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
                Schema::dropIfExists('category');
    }
};
