<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->datetime('date_time');
            $table->text('description')->nullable();
            $table->tinyInteger('free_event');
            $table->string('photo')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('available_tickets')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
};
