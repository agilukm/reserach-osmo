<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePembangkit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembangkit', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('company_id')->unsigned();
            $table->string('tgl_berlaku');
            $table->string('tgl_berakhir');
            $table->string('no_sertifikat');
            $table->string('no_registrasi');
            $table->integer('tahun_pembuatan');
            $table->string('mesin_jenis_turbin');
            $table->string('mesin_merk_pembuat');
            $table->string('mesin_negara_pembuat');
            $table->string('mesin_tahun_pembuatan');
            $table->string('mesin_tipe_seri_mesin')->nullable();
            $table->string('mesin_kapasitas')->nullable();
            $table->string('generator_merk_pembuat');
            $table->string('generator_negara_pembuat');
            $table->string('generator_tahun_pembuatan');
            $table->string('generator_tipe_seri_mesin')->nullable();
            $table->string('generator_kapasitas')->nullable();
            $table->string('generator_fasa')->nullable();
            $table->string('generator_frekuensi')->nullable();
            $table->string('generator_tegangan')->nullable();
            $table->string('generator_arus')->nullable();
            $table->string('generator_power_factor')->nullable();
            $table->string('generator_daya')->nullable();
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
        Schema::table('pembangkit', function (Blueprint $table) {
            //
        });
    }
}
