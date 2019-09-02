<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedDwellingOutbuildingWallRoofToPrDpPremises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pr_dp_premises', function ($table) {
            $table->string('dweling_wall')->after('location');
            $table->string('dwelling_roof')->after('dweling_wall');
            $table->string('outbuilding_wall')->after('floors')->nullable();
            $table->string('outbuilding_roof')->after('outbuilding_wall')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pr_dp_premises', function ($table) {
            $table->dropColumn('dwelling_wall');
            $table->dropColumn('dwelling_roof');
            $table->dropColumn('outbuilding_wall');
            $table->dropColumn('outbuilding_roof');
        });
    }
}
