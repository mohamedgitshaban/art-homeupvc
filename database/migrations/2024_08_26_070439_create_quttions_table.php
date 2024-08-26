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
        Schema::create('quttions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('funnel_frame_works_id');
            $table->string("qutation_status")->default("pending");
            $table->string("reason")->nullable();
            $table->date("qutation_start_date")->nullable();
            $table->date("Qutation_end_date")->nullable();
            $table->string("Qutation_data")->default("");
            $table->integer("total_selling_price")->default(0);
            $table->integer("project_gross_margin")->default(0);
            $table->foreign('funnel_frame_works_id')->references('id')->on('funnel_frame_works')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quttions');
    }
};
