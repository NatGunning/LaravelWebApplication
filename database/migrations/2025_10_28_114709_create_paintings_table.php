<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Run the migrations - Create the table
    public function up(): void
    {
        Schema::create('paintings', function (Blueprint $table) {
            $table->id();
            $table->string("title");    
            $table->smallInteger("year");
            // $table->string("artist");
            $table->string("style");
            $table->string("image");
            $table->longText("description");
            $table->timestamps();
        });
    }

    // Reverse the migrations - Delete the table
    public function down(): void
    {
        Schema::dropIfExists('paintings');
    }
};