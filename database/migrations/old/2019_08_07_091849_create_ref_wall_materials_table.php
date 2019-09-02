<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefWallMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_wall_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('wall_id');
            // $table->index('wall_id');
            // $table->foreign('wall_id')->references('premises_id')->on('pr_dp_premises')->onDelete('cascade');
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
        Schema::dropIfExists('ref_wall_materials');
    }
}
