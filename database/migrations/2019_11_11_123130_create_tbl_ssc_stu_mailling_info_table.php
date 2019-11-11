<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscStuMaillingInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_stu_mailling_info', function (Blueprint $table) {
            $table->bigIncrements('ssc_stu_mail_id');
              $table->string('stu_code');
             $table->string('ssc_stu_email');
            $table->string('ssc_stu_pass');
            $table->string('ssc_stu_img_url');     
 
            
            
            
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
        Schema::dropIfExists('tbl_ssc_stu_mailling_info');
    }
}
