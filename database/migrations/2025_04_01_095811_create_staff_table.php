<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
{
    Schema::create('staff', function (Blueprint $table) {
        $table->id();
        $table->string('index_number');
        $table->string('full_names');
        $table->string('email')->unique();
        $table->string('current_location');
        $table->unsignedBigInteger('highest_level_of_education');
        $table->unsignedBigInteger('duty_station');
        $table->string('availability_for_remote_work');
        $table->string('software_expertise');
        $table->string('software_expertise_level');
        $table->string('language');
        $table->string('level_of_responsibility');
        $table->timestamps();

        // Add foreign key constraints
        $table->foreign('highest_level_of_education')->references('id')->on('education_levels')->onDelete('cascade');
        $table->foreign('duty_station')->references('id')->on('duty_stations')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
