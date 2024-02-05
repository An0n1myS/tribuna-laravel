<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('booking_tubing', function (Blueprint $table) {
            $table->id();
            $table->string('time_slot');
            $table->string('type');
            $table->integer('quantity');
            $table->string('user_name');
            $table->string('phone');
            $table->foreignId('service_id')->nullable()->constrained('services');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_tubing');
    }
};
