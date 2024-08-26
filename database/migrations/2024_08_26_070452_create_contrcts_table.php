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
        Schema::create('contrcts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('funnel_frame_works_id');
            $table->string("contract_status")->default("pending");
            $table->date("contract_start_date")->nullable();
            $table->date("contract_end_date")->nullable();
            $table->string("contract_data")->default("");
            $table->integer("contract_value")->default(0);
            $table->foreign('funnel_frame_works_id')->references('id')->on('funnel_frame_works')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrcts');
    }
};
