<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingMiddleNamePoBoxCity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add middle name po box city postal code and county columns
        Schema::table('users', function($table) {
        $table->string('middle_name')->after('first_name');
        $table->integer('postal_address')->after('kra');
        $table->string('city_town')->after('postal_address');
        $table->integer('post_code')->after('city_town');
        $table->string('county')->after('post_code');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
        $table->dropColumn('middle_name');
        $table->dropColumn('postal_address');
        $table->dropColumn('city_town');
        $table->dropColumn('post_code');
        $table->dropColumn('county');
    });
    }
}
