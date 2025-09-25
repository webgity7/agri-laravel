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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->string('password');
            $table->boolean('newsletter')->default(false);
            $table->boolean('privacypolicy')->default(false);
            $table->string('deleted');
            $table->string('status')->default('Inactive');
            $table->timestamp('created')->useCurrent();
            $table->timestamp('updated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
