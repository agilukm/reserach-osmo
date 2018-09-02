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
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('kota')->nullable();
            $table->string('nomor_pertek')->nullable();
            $table->string('tgl_pertek')->nullable();
            $table->string('nomor_dpmptsp')->nullable();
            $table->date('tgl_terbit')->nullable();
            $table->string('tgl_berlaku')->nullable();
            $table->string('tgl_berakhir')->nullable();
            $table->date('last_updated_time')->nullable();
            $table->string('status')->nullable();
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
