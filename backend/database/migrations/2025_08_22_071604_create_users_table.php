<?php

use App\Enums\RoleUser;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('control_station_id')->nullable()->constrained('control_stations');
            $table->string('user_name')->unique();
            $table->string('password');
            $table->enum('role', RoleUser::getValues())->default(RoleUser::USER);
            $table->datetime('last_login_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
