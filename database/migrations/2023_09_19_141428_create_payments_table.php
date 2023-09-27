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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('payment_method');
            $table->decimal('payment_amount', 10, 2);
            $table->string('payment_status');
            $table->timestamp('payment_date');
            $table->string('payment_gateway_response')->nullable();
            $table->string('transaction_id')->unique();
            $table->string('billing_information')->nullable();
            $table->string('currency');
            $table->text('payment_description')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('refund_status')->nullable();
            $table->decimal('refund_amount', 10, 2)->nullable();
            // Add any additional columns as needed
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
