<?php

use App\Enums\CommunicationStatusEnum;
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
        Schema::create('communications', function (Blueprint $table) {
            $table->ulid("id")->primary()->autoIncrement();
            $table->foreignIdFor(User::class, "user_id");
            $table->foreignIdFor(User::class, "assigned_by");
            $table->string("title");
            $table->string("feedback")->nullable();
            $table->integer("status")->default(CommunicationStatusEnum::pending);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communications');
    }
};
