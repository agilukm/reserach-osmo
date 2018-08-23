<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSkttk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skttk', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('company_id')->unsigned();
            $table->string('nama');
            $table->string('penerbit');
            $table->string('nomor');
            $table->string('tanggal');
            $table->string('bidang');
            $table->string('level');
            $table->string('ket')->nullable();
            $table->foreign('company_id')->references('id')->on("companies")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skttk', function (Blueprint $table) {
            //
        });
    }
}
