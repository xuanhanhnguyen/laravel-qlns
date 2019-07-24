<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableXinnghi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xinnghi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_nhan_su');
            $table->foreign('id_nhan_su')->references('id')->on('nhansu');
            $table->integer('so_buoi_nghi');
            $table->string('ngay_bat_dau',200);
            $table->string('ngay_ket_thuc',200);
            $table->string('ly_do',200);
            $table->string('chuyen_toi_ai',200);
            $table->string('loai_nghi',200);
            $table->boolean('phe_duyet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xinnghi');
    }
}
