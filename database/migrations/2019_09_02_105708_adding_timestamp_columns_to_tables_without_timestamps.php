<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingTimestampColumnsToTablesWithoutTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ref_outbuilding_materials', function (Blueprint $table) {
            //
            $table->timestamps();
        });

        Schema::table('product_categories', function (Blueprint $table) {
            //
            $table->timestamps();
        });
        Schema::table('payments', function (Blueprint $table) {
            //
            $table->timestamps();
        });
        Schema::table('ref_jobs', function (Blueprint $table) {
            //
            $table->timestamps();
        });
        Schema::table('pr_dp_covers', function (Blueprint $table) {
            //
            $table->timestamps();
        });
        Schema::table('ref_outbuilding_walls', function (Blueprint $table) {
            //
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
        Schema::table('product_categories', function (Blueprint $table) {
            //
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('payments', function (Blueprint $table) {
            //
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('ref_jobs', function (Blueprint $table) {
            //
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('pr_db_covers', function (Blueprint $table) {
            //
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('ref_outbuilding_walls', function (Blueprint $table) {
            //
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('ref_outbuilding_materials', function (Blueprint $table) {
            //
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
