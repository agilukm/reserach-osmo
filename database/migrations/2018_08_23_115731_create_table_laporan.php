<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('pembangkit_id')->unsigned();
            $table->string('jenis_bahan_bakar')->nullable();
            $table->string('konsumsi_bahan_bakar')->nullable();
            $table->string('jenis_pelumas')->nullable();
            $table->string('konsumsi_pelumas')->nullable();
            $table->string('waktu_operasi_mesin')->nullable();
            $table->string('produksi_listrik')->nullable();
            $table->string('jumlah_kerusakan')->nullable();
            $table->string('sambungan_badan_usaha')->nullable();
            $table->string('sambungan_in_out')->nullable();
            $table->string('sambungan_rata_rata')->nullable();
            $table->string('sambungan_cara_distribusi')->nullable();
            $table->integer('periode')->nullable();
            $table->foreign('pembangkit_id')->references('id')->on("pembangkit")
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
        Schema::dropIfExists('laporan');
    }
}
