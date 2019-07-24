<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhansu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhansu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ho_ten',200);
            $table->string('ngay_sinh',200);
            $table->string('noi_thuong_tru',200);
            $table->string('cmnd',200);
            $table->timestamp('ngay_vao')->useCurrent();
            $table->string('ngay_hoc_viec',200)->nullable();
            $table->string('ngay_kt_hoc_viec',200)->nullable();
            $table->string('ngay_thu_viec',200)->nullable();
            $table->string('ngay_kt_thu_viec',200)->nullable();
            $table->string('ngay_lam_chinh_thuc',200)->nullable();
            $table->string('ngay_lam_ket_thuc',200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhansu');
    }
}
