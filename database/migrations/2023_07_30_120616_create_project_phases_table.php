<?php

use App\Models\Project;
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
        Schema::create('project_phases', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class);
            $table->string('title');
            $table->string("slug")->unique();
            $table->date("start_date");
            $table->date("end_date");
            $table->date("start_tender_date");
            $table->date("end_tender_date");
            $table->string("skills");
            $table->string("prerequisite");
            $table->mediumText('description');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_phases');
    }
};
