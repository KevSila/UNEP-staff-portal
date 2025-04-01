<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EducationLevel extends Model
{
    use HasFactory;

    protected $fillable = ['level_name'];

    // Define inverse relationships (e.g., Staff)
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('education_levels', function (Blueprint $table) {
            $table->id();
            $table->string('level_name');  // Column for education level (e.g., High School, Bachelor's, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('education_levels');
    }
};
