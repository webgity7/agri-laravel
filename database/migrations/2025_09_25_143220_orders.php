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
        Schema::create('orders', function(Blueprint $table){
            $table->id();
            $table->timestamp('orderdate');
            $table->foreignId('customer_id');
            $table->integer('billingaddress');
            $table->integer('shippingaddress');
            $table->decimal('subtotal',8,2);
            $table->decimal('ecotax',8,2);
            $table->decimal('discount',8,2);
            $table->decimal('vat',8,2);
            $table->decimal('total',8,2);
            $table->string('status')->nullable();
            $table->string('paymentmood')->nullable();
            $table->string('deleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
