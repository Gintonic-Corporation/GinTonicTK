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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customerID');
            $table->unsignedBigInteger('filmID');
            $table->date('out');
            $table->date('in');
            $table->timestamps();

            $table->foreign('customerID')->references('id')->on('Customers')->onDelete('Cascade');
            $table->foreign('filmID')->references('id')->on('films')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
