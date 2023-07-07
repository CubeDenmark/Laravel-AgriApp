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
        Schema::create('userdbs', function (Blueprint $table) {
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique('emailindex');
            $table->string('pass');
            $table->string('phonenum')->unique('phonenum');
            $table->string('address');
            $table->dateTime('regdate', 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userdbs');
    }
};
