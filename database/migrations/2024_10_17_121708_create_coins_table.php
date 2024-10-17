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
        Schema::create('coins', function (Blueprint $table) {
            $table->string('symbol')->primary();
            $table->string('pool_name')->unique();
            $table->string('name')->index();
            $table->string('scheme')->default('PLLNT');
            $table->string('color')->comment('HEX Code for Color')->nullable()->default(null);
            $table->string('icon_url')->nullable()->default(null);
            $table->json('externals')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};
