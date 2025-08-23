<?php

use App\Enums\LightState;
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
        Schema::create('light_states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('traffic_light_id')->constrained('traffic_lights');
            $table->enum('state', LightState::getValues());
            $table->dateTime(('start_time'))->nullable();
            $table->dateTime(('end_time'))->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('light_states');
    }
};
