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
        Schema::table('digital_gifts', function (Blueprint $table) {
            //
            $table->string('account_name')->after('invitation_main_id')->nullable();
            $table->string('account_no')->after('invitation_main_id')->nullable();
            $table->string('bank_logo')->after('invitation_main_id')->nullable();
            $table->string('barcode')->after('invitation_main_id')->nullable();
            $table->dropColumn(['name', 'phone', 'address']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('digital_gifts', function (Blueprint $table) {
            //
        });
    }
};
