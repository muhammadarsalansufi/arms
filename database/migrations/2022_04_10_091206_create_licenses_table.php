<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name');
            $table->string('father_name');
            $table->string('license_no');
            $table->string('weapon_type');
            $table->string('calibar');
            $table->string('weapon_no');
            $table->string('cartridges');
            $table->string('status');
            $table->string('i_date');
            $table->string('e_date');
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
        Schema::dropIfExists('licenses');
    }
}
