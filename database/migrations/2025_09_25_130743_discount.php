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
        Schema::create('discount', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->timestamp('valid_form');
            $table->timestamp('valid_to');
            $table->decimal('amount',8,2);
            $table->string('type');
            $table->string('status');
            $table->string('deleted');
            $table->timestamp('created');
            $table->timestamp('updated')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount');
    }
};
