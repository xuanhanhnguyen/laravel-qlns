<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChitietchitieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietchitieu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_chi_tieu');
            $table->foreign('id_chi_tieu')->references('id')->on('chitieu');
            $table->unsignedBigInteger('id_nhan_su');
            $table->foreign('id_nhan_su')->references('id')->on('nhansu');
            $table->integer('diem_chi_tieu');
            $table->integer('diem_dat_duoc')->nullable();
            $table->integer('thang');
            $table->integer('nam');
            $table->string('ket_qua')->nullable();
            $table->string('khen_thuong')->nullable();
            $table->string('canh_bao')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietchitieu');
    }
}
