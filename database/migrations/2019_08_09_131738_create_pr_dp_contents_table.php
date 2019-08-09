<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrDpContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr_dp_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_description');
            $table->integer('item_value');
            $table->integer('section_id');
            $table->enum('customer_role', ['owner', 'tenant']);
            $table->integer('premises_id');
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
        Schema::dropIfExists('pr_dp_contents');
    }
}
