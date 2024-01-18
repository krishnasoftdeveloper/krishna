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
        Schema::create('bus_train_routes', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('route_name');
            $table->string('stops');
            $table->string('departure_time');
            $table->string('arivel_time');
            $table->string('fare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_train_routes');
    }
};
