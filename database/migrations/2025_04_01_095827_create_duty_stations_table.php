<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DutyStation extends Model
{
    use HasFactory;

    protected $fillable = ['station_name'];

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
        Schema::create('duty_stations', function (Blueprint $table) {
            $table->id();
            $table->string('station_name');  // Column for duty station name (e.g., Nairobi, Kisumu, etc.)
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
        Schema::dropIfExists('duty_stations');
    }
};
