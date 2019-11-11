<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSscStuParentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssc_stu_parent_info', function (Blueprint $table) {
            $table->bigIncrements('ssc_stu_parent_id');
               $table->string('stu_code');
             
            $table->string('ssc_stu_father_name');
            $table->string('ssc_stu_father_occu');
            $table->string('ssc_stu_father_phone');  
            $table->string('ssc_stu_father_income'); 
            
            $table->string('ssc_stu_mother_name');
            $table->string('ssc_stu_mother_occu');
            $table->string('ssc_stu_mother_phone');  
 
            
            
            
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
        Schema::dropIfExists('ssc_stu_parent_info');
    }
}
