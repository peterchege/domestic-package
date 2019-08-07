<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrDpPremisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr_dp_premises', function (Blueprint $table) {
            $table->bigIncrements('premises_id');
            $table->string('location');
            $table->integer('floors');
            $table->string('business');
            $table->longText('business_description')->nullable();
            $table->boolean('sole_occupation');
            $table->enum('dwelling', ['private', 'self-contained', 'room-not-self-contained']);
            $table->boolean('for_hire');
            $table->string('thirty_day_inoccupancy');
            $table->longText('thirty_day_inoccupancy_details')->nullable();
            $table->boolean('good_state_of_repair');
            $table->boolean('burglar_proof');
            $table->longText('burglar_proof_details')->nullable();
            $table->longText('other_sec_arrangement');
            $table->integer('premises_value')->nullable();
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
        Schema::dropIfExists('pr_dp_premises');
    }
}
