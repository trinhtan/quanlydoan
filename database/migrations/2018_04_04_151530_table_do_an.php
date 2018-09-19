<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDoAn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('do_an',function($table){
            $table->increments('id');
            $table->string('id_sinh_vien',10);
            $table->integer('id_loai_do_an')->unsigned();
            $table->integer('id_bo_mon')->unsigned();
            $table->string('ten_de_tai',100);
            $table->string('giang_vien',10);
            $table->text('file_bao_cao');
            $table->string('school_year',10);
            $table->integer('diem');
            $table->string('note',100);
            $table->foreign('id_loai_do_an')->references('id')->on('loai_do_an');
            $table->foreign('id_bo_mon')->references('id')->on('bo_mon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('do_an');
    }
}
