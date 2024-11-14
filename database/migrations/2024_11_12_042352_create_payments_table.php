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
            $table->string('vendor_id');
            $table->date('pay_date');
            $table->decimal('pay_amount');
            $table->string('event_expense_id');
            $table->string('client_id');
            $table->string('pay_type');
            $table->string('bank_name');
            $table->string('check_number');
            $table->string('check_date');
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
