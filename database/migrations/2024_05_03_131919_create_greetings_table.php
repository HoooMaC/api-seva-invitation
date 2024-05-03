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
        Schema::create('greetings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('relation');
            $table->string('icon')->nullable();
            $table->string('message');
            $table->timestamps(); // Ini sudah mencukupi untuk menambahkan kolom "created_at" dan "updated_at"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('greetings');
    }
};
