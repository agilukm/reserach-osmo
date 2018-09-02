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
            $table->string('nama')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('nomor')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('bidang')->nullable();
            $table->string('level')->nullable();
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
        Schema::dropIfExists('skttk');
    }
}
