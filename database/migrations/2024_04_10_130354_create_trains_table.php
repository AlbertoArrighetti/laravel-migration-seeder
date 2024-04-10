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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // created columns
            $table->string('agency', 50);

            $table->string('departure_station' , 50);
            $table->string('arrival_station' , 50);

            $table->date('departure_time');
            $table->date('arrival_time');

            $table->smallInteger('train_code');

            $table->tinyInteger('carriages');
            
            $table->boolean('delay');
            $table->boolean('cancel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
