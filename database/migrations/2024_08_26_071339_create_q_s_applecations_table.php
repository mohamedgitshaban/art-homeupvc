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
        Schema::create('q_s_applecations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('technecal_requests_id');
            $table->string("name");
            $table->integer("total_cost")->default(0);
            $table->float("gross_margen")->default(0);
            $table->float("saling_price")->default(0);
            $table->foreign('technecal_requests_id')->references('id')->on('technecal_requests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_s_applecations');
    }
};
