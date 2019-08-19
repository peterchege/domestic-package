<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrDpGeneralInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr_dp_general_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->boolean('insurer_decline');
            $table->string('insurer_decline_details')->nullable();
            $table->boolean('special_terms');
            $table->string('special_terms_details')->nullable();
            $table->boolean('cancelled_refused_cover');
            $table->string('cancelled_refused_cover_details')->nullable();
            $table->boolean('increased_premium');
            $table->string('increased_premium_details')->nullable();
            $table->boolean('sustained_loss_from_mentioned_perils');
            $table->string('sustained_loss_from_mentioned_perils_details')->nullable();

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
        Schema::dropIfExists('pr_dp_general_informations');
    }
}
