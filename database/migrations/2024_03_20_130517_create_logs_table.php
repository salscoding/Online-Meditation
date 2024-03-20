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
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            // user meditation log
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('meditation_id')->constrained()->onDelete('cascade');
            $table->integer('duration');
            $table->date('date');
            $table->text('note')->nullable();
            $table->enum('status', ['completed', 'incompleted'])->default('completed');
            $table->enum('mood', ['happy', 'sad', 'angry', 'relaxed', 'stressed', 'tired', 'energetic', 'calm', 'anxious', 'other'])->default('calm');
            $table->enum('feeling', ['good', 'bad', 'neutral'])->default('good');
            $table->enum('rating', ['1', '2', '3', '4', '5'])->default('5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
};
