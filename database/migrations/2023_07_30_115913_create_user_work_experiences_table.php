<?php

use App\Enums\JobTypeEnum;
use App\Enums\WorkExperienceEnum;
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
        Schema::create('user_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(User::class);
            $table->string('company_name');
            $table->string('location');
            $table->integer('job_type')->default(JobTypeEnum::onSite);
            $table->string('description')->nullable();
            $table->string('from');
            $table->string("to")->nullable();
            $table->integer("status")->default(WorkExperienceEnum::working);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_work_experiences');
    }
};
