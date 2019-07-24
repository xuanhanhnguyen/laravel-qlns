<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChitieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitieu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_phong_ban');
            $table->foreign('id_phong_ban')->references('id')->on('phongban');
            $table->string('ten_chi_tieu',200);
            $table->string('mo_ta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitieu');
    }
}
