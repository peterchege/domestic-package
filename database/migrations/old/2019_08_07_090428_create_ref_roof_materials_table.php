<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefRoofMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_roof_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('roof_id');
            // $table->index('roof_id');
            // $table->foreign('roof_id')->references('premises_id')->on('pr_dp_premises')->onDelete('cascade');
            $table->string('description');
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
        Schema::dropIfExists('ref_roof_materials');
    }
}
