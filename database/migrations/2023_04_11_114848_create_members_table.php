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
        Schema::create('Members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->varchar('image');
            $table->text('Name');
			$table->string('phone', 20)->unique();
			$table->string('address');
            $table->text('experince');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Members');
    }
};
