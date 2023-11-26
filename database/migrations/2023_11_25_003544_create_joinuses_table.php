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
        Schema::create('joinuses', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('shop_phone');
            $table->string('shop_description');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('owner_email');
            $table->text('product_description');
            $table->string('product_categories');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joinuses');
    }
};
