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
        Schema::create('invitation_mains', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('catalog_id');
            $table->string('nickname_groom')->nullable();
            $table->string('nickname_bride')->nullable();
            $table->dateTime('marriage_date')->nullable();
            $table->string('quote')->nullable(); 
            $table->string('quote_refererence')->nullable(); 
            $table->string('full_name_groom')->nullable(); 
            $table->string('pics_groom')->nullable(); 
            $table->string('ig_groom')->nullable(); 
            $table->string('full_name_bride')->nullable(); 
            $table->string('pics_bride')->nullable(); 
            $table->string('ig_bride')->nullable(); 
            $table->string('groom_fathe')->nullable(); 
            $table->string('groom_mother')->nullable(); 
            $table->string('bride_father')->nullable(); 
            $table->string('bride_mother')->nullable(); 

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
        Schema::dropIfExists('invitation_mains');
    }
};
