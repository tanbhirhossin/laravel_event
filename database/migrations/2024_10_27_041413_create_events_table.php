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
            $table->string('client_id');
            $table->string('event_details');
            $table->date('event_start_date');
            $table->time('event_start_time');
            $table->date('event_end_date');
            $table->time('event_end_time');
            $table->string('location');
            $table->string('contact_no');
            $table->decimal('event_cost');
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
