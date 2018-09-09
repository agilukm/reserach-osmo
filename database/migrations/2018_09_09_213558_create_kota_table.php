<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kota');
            $table->timestamps();
        });

        $kotas = [
            "KABUPATEN BOGOR",
            "KABUPATEN SUKABUMI",
            "KABUPATEN CIANJUR",
            "KABUPATEN BANDUNG",
            "KABUPATEN GARUT",
            "KABUPATEN TASIKMALAYA",
            "KABUPATEN CIAMIS",
            "KABUPATEN KUNINGAN",
            "KABUPATEN CIREBON",
            "KABUPATEN MAJALENGKA",
            "KABUPATEN SUMEDANG",
            "KABUPATEN INDRAMAYU",
            "KABUPATEN SUBANG",
            "KABUPATEN PURWAKARTA",
            "KABUPATEN KARAWANG",
            "KABUPATEN BEKASI",
            "KABUPATEN BANDUNG BARAT",
            "KABUPATEN PANGANDARAN",
            "KOTA BOGOR",
            "KOTA SUKABUMI",
            "KOTA BANDUNG",
            "KOTA CIREBON",
            "KOTA BEKASI",
            "KOTA DEPOK",
            "KOTA CIMAHI",
            "KOTA TASIKMALAYA",
            "KOTA BANJAR",
        ];

        foreach ($kotas as $key => $kota) {
           DB::table('kotas')->insert([
               'id' => $key+1,
               'kota' => $kota
           ]);
       }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kotas');
    }
}
