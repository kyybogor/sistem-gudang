<?php

// database/migrations/xxxx_xx_xx_create_password_otps_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('password_otps', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('otp');
            $table->timestamp('expired_at');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('password_otps');
    }
};