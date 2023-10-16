<?php

use App\Models\Communication;
use App\Models\Project;
use App\Models\User;
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
        Schema::create('communication_records', function (Blueprint $table) {
            $table->ulid("id");
            $table->foreignIdFor(Communication::class);
            $table->foreignIdFor(User::class);
            $table->string("message");
            $table->dateTimeTz("seen")->nullable();
            $table->boolean("is_read")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communication_records');
    }
};
