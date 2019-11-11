<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscStuPersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_stu_personal_info', function (Blueprint $table) {
            $table->bigIncrements('stu_id');
            $table->string('stu_code');
            $table->string('stu_name');
            $table->string('stu_phone');
            $table->string('stu_dob');
            $table->string('stu_religion');
            $table->string('stu_gender');
            $table->string('stu_nationality');
            $table->tinyInteger('active_status');
            
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
        Schema::dropIfExists('tbl_ssc_stu_personal_info');
    }
}
