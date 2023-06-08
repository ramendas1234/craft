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
        Schema::create('employee_office_informations', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_joining');
            $table->char('experience');
            $table->boolean('is_notice_period')->default(false);
            $table->boolean('is_remote')->default(false);
            $table->char('salary');
            $table->char('gender');
            $table->foreignId('profession_id')->nullable()->constrained();
            $table->foreignId('shift_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_office_informations');
    }
};
