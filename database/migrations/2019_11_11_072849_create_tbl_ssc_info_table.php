<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_info', function (Blueprint $table) {
            $table->bigIncrements('ssc_info_id');
            $table->string('stu_code');
            $table->string('ssc_board');
            $table->string('ssc_yr');
            $table->string('ssc_insti');
            $table->string('ssc_role');
            $table->string('ssc_regi');
            $table->string('ssc_group');
            $table->string('gpa_four_subject');
            $table->string('gpa'); 
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
        Schema::dropIfExists('tbl_ssc_info');
    }
}
