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
        Schema::create('wedding_receptions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invitation_main_id');
            $table->dateTime('date');
            $table->string('hour_from')->nullable();
            $table->string('hour_to')->nullable();
            $table->string('place_name')->nullable();
            $table->string('address')->nullable(); 

            $table->softDeletes();
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
        Schema::dropIfExists('wedding_receptions');
    }
};
