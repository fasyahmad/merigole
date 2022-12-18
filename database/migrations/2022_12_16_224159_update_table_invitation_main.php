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
            $table->string('quote_reference')->after('quote')->nullable();
            $table->dropColumn(['quote_refererence']);
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
