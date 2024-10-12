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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('event_type');
            $table->dateTime('event_date');
            $table->string('location');
            $table->integer('capacity');
            $table->decimal('price', 8, 2);
            $table->string('email')->nullable(); 
            $table->string('address')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
