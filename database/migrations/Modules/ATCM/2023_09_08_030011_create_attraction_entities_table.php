<?php

use App\Enums\AttractionsEntityStatus;
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
        Schema::create('attraction_entities', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->enum('status', AttractionsEntityStatus::options());
            $table->string('name');
            $table->foreignId('attraction_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attraction_entities');
    }
};
