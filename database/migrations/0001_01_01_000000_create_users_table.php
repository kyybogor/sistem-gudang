<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user'); // primary key
            $table->string('nm_user'); // nama user
            $table->string('email')->unique(); // email
            $table->string('pass'); // password
            $table->string('grup'); // grup user
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
