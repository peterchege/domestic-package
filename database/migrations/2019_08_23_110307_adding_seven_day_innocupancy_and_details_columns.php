<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingSevenDayInnocupancyAndDetailsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pr_dp_premises', function ($table) {
            $table->string('seven_day_inoccupancy')->after('thirty_day_inoccupancy_details')->nullable();
            $table->string('seven_day_inoccupancy_details')->after('thirty_day_inoccupancy_details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pr_dp_premises', function ($table) {
            //
            $table->dropColumn('seven_day_inoccupancy');
            $table->dropColumn('seven_day_inoccupancy_details');
        });
    }
}
