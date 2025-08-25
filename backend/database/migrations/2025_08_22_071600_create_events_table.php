<?php

use App\Enums\EventType;
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
            $table->foreignId('intersection_id')->nullable()->constrained('intersections');
            $table->foreignId('traffic_light_id')->nullable()->constrained('traffic_lights');
            $table->foreignId('light_state_id')->nullable()->constrained('light_states');
            $table->enum('event', EventType::getValues());
            $table->string('description', 1000)->nullable();
            $table->dateTime('event_time');
            $table->timestamps();
            $table->softDeletes();
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
