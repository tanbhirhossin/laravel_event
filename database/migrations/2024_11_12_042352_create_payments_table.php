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
            $table->string('vendor_id')->nullable();
            $table->date('pay_date');
            $table->decimal('pay_amount');
            $table->string('event_expense_id')->nullable();
            $table->string('event_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('pay_type')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('check_number')->nullable();
            $table->string('check_date')->nullable();
            $table->timestamps();
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
