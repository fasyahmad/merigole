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
        Schema::create('physical_gifts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invitation_main_id');
            $table->string('account_no')->nullable();
            $table->string('bank_logo')->nullable();
            $table->string('barcode')->nullable();

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
        Schema::dropIfExists('physical_gifts');
    }
};
