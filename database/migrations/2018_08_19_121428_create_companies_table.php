<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('kota');
            $table->string('nomor_pertek');
            $table->string('tgl_pertek');
            $table->string('nomor_dpmptsp');
            $table->date('tgl_terbit');
            $table->string('tgl_berlaku');
            $table->string('tgl_berakhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
