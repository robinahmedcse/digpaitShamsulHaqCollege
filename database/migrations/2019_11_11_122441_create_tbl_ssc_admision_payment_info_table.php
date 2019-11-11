<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscAdmisionPaymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_admision_payment_info', function (Blueprint $table) {
            $table->bigIncrements('ssc_admision_payment_id');
            
            $table->string('stu_code');
            $table->string('ad_payment_type');
            $table->string('ad_pay_slip_id');     
 
            
            
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
        Schema::dropIfExists('tbl_ssc_admision_payment_info');
    }
}
