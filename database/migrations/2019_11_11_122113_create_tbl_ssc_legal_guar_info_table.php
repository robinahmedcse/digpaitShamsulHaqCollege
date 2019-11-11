<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSscLegalGuarInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ssc_legal_guar_info', function (Blueprint $table) {
            $table->bigIncrements('legal_guar_id');
            
            $table->string('stu_code');
            $table->string('g_name');
            $table->string('g_phone');     
            $table->string('g_occu');
            $table->string('g_address');
            
            
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
        Schema::dropIfExists('tbl_ssc_legal_guar_info');
    }
}
