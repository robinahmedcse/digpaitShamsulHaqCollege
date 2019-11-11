<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscPresentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_present_info', function (Blueprint $table) {
                $table->bigIncrements('ssc_pres_info_id');
            
            $table->string('stu_code');
            $table->string('pres_village');
            $table->string('pres_post_code');     
            $table->string('pres_upazila');
            $table->string('pres_district');
            
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
        Schema::dropIfExists('tbl_ssc_present_info');
    }
}
