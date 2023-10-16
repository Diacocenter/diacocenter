<?php

use App\Enums\UserAgreementStatusEnum;
use App\Models\Agreement;
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
        Schema::create('user_agreements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Agreement::class);
            $table->foreignIdFor(User::class);
            $table->boolean("acceptance_1")->default(false);
            $table->boolean("acceptance_2")->default(false);
            $table->integer("status")->default(UserAgreementStatusEnum::pending);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_agreements');
    }
};
