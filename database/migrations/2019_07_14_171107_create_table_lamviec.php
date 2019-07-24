<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLamviec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamviec', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_phong_ban');
            $table->foreign('id_phong_ban')->references('id')->on('phongban');
            $table->unsignedBigInteger('id_nhan_su');
            $table->foreign('id_nhan_su')->references('id')->on('nhansu');
            $table->unsignedBigInteger('id_vi_tri');
            $table->foreign('id_vi_tri')->references('id')->on('vitri');
            $table->timestamp('ngay_lam');
            $table->string('ngay_ket_thuc',200)->nullable();
            $table->string('ghi_chu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamviec');
    }
}
