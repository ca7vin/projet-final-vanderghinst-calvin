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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->boolean('favori');
            $table->boolean('status')->default(false);
            $table->string('title');
            $table->text('description');
            $table->string('discipline');
            $table->string('price');
            $table->string('level');
            $table->string('start');
            $table->string('duration');
            $table->string('price_color');
            $table->string('image');
            $table->foreignId("prof_id")->nullable()->constrained("profs", "id")->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
};
