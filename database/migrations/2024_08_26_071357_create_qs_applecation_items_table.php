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
        Schema::create('qs_applecation_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('qc_applecations_id');
            $table->string("stock_code");
            $table->text("description")->default("");
            $table->integer("price")->default(0);
            $table->float("quantity")->default();
            $table->foreign('qc_applecations_id')->references('id')->on('q_s_applecations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qs_applecation_items');
    }
};
