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
        Schema::create('address', function(Blueprint $table){
            $table->id();
            $table->foreignId('customers_id');
            $table->string('fullname')->nullable();
            $table->string('companyaddress')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode');
            $table->string('country');
            $table->string('states');
            $table->string('type');
            $table->string('deleted')->default('No');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
