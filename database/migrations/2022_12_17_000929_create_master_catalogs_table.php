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
        Schema::create('master_catalogs', function (Blueprint $table) {
            $table->id();
            $table->integer('master_catalog_id')->nullable();
            $table->string('master_catalog_category')->nullable();
            $table->string('master_catalog_name')->nullable();
            $table->string('master_catalog_img')->nullable();

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
        Schema::dropIfExists('master_catalogs');
    }
};
