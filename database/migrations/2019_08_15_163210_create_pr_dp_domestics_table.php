<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrDpDomesticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr_dp_domestics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_type')->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->double('annual_salary')->nullable();
            $table->integer('section_id');
            $table->enum('customer_role',['owner', 'tenant']);
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
        Schema::dropIfExists('pr_dp_domestics');
    }
}
