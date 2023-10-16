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
        Schema::create('users', function (Blueprint $table) {
            $table->ulid("id")->primary()->autoIncrement();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug')->nullable();
            $table->string('sex')->default(0);
            $table->string('email')->unique();
            $table->string('skills')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('location')->nullable();
            $table->mediumText("about_me")->nullable();
            $table->string("role_is")->nullable();
            $table->integer("verification_code")->nullable();
            $table->boolean("is_cooperational")->nullable();
//            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
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
