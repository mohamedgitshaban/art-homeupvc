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
        Schema::create('technecal_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('funnel_frame_works_id');
            $table->string("qs_status")->default("pending");
            $table->date("qs_start_date")->default(now());
            $table->date("qs_end_date")->nullable();
            $table->integer("total_price")->nullable();
            $table->string("qs_data")->default("");
            $table->text("reason")->default("");
            $table->foreign('funnel_frame_works_id')->references('id')->on('funnel_frame_works')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technecal_requests');
    }
};
