<?php

use App\Enums\ProjectStatusEnum;
use App\Models\Language;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('status')->default(ProjectStatusEnum::applied);
            $table->foreignIdFor(Language::class);
            $table->string('start_date');
            $table->string('end_date');
            $table->mediumText("description");
            $table->double("price");
            $table->string('label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
