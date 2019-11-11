<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscPermanentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_permanent_info', function (Blueprint $table) {
            $table->bigIncrements('ssc_per_info_id');
            
            $table->string('stu_code');
            $table->string('per_village');
            $table->string('per_post_code');     
            $table->string('per_upazila');
            $table->string('per_district');
  
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
        Schema::dropIfExists('tbl_ssc_permanent_info');
    }
}
