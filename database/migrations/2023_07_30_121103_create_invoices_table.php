<?php

use App\Enums\InvoiceStatusEnum;
use App\Models\Currency;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->ulid('id');
            $table->string("title");
            $table->string('user_id', 26);
            $table->foreignIdFor(Currency::class)->nullable();
            $table->double('total');
            $table->double('discount');
            $table->double('tax');
            $table->double('subtotal');
            $table->date("expire");
            $table->integer("status")->default(InvoiceStatusEnum::pending);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
