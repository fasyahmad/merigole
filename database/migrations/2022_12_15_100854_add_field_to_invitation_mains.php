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
        Schema::table('invitation_mains', function (Blueprint $table) {
            //
            $table->string('background_color')->after('marriage_date')->nullable();
            $table->string('groom_father')->after('ig_bride')->nullable();
            $table->dropColumn(['groom_fathe']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invitation_mains', function (Blueprint $table) {
            //
        });
    }
};
