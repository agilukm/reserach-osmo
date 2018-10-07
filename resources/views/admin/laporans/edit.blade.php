@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        LAPORAN
    </h1>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Tambah Data Laporan Berkala Pembangkit</div>
                </div>

            <form role="form" id="form1" action="{{url('/laporan')}}/{{$laporan->id}}" method="post" class="validate">
                {{ method_field('PATCH') }}
                <div class="panel-body">
                    <div class="row item-description">
                    	<div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Perusahaan</label>
                                    <select class="form-control" name="company_id" required id="perusahaan" placeholder="Pilih Data Perusahaan" readonly>
                                            <option value="{{$laporan->pembangkit->company->id}}">{{$laporan->pembangkit->company->nama}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Pembangkit</label>
                                    <select class="form-control" name="pembangkit_id" required id="pembangkit" placeholder="Pilih Nama Perusahaan Jika Data Pembangkit Kosong" readonly>
                                        <option value="{{$laporan->pembangkit_id}}">{{$laporan->pembangkit->no_sertifikat}} - {{$laporan->pembangkit->no_registrasi}}</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="grant1">Periode</label>
                                    <input required type="number" class="form-control" name="periode" placeholder="Periode" value="{{$laporan->periode}}"  />
                                </div>
                                <div class="form-group">
                                    <label for="grant1">Tanggal Berlaku SLO</label>
                                    <input required type="text" class="form-control daterangepickerz" name="tgl_berlaku" placeholder="Tanggal Berlaku" value="{{$laporan->pembangkit->tgl_berlaku}}"  />
                                </div>
                                <div class="form-group">
                                    <label for="grant2">Tanggal Berakhir SLO</label>
                                    <input required type="text" name="tgl_berakhir" class="form-control daterangepickerz" value="{{$laporan->pembangkit->tgl_berakhir}}" id='grant2' placeholder="Tanggal Berakhir"  />
                                </div>
                                <div class="form-group">
                                    <label for="shorttitle">Nomor SLO</label>
                                    <input required type="text" name="no_sertifikat" class="form-control" value="{{$laporan->pembangkit->no_sertifikat}}" 	id='shorttitle' placeholder="Nomor Registrasi"  />

                                </div>
                                <div class="form-group">
                                    <label for="shorttitle">Nomor Registrasi SLO</label>
                                    <input required type="text" name="no_registrasi" class="form-control" value="{{$laporan->pembangkit->no_sertifikat}}" 	id='shorttitle' placeholder="Nomor Registrasi"  />

                                </div>
                                <div class="form-group">
                                    <label for="shorttitle">Tahun Pembuatan</label>
                                    <input required type="number" name="tahun_pembuatan" class="form-control" value="{{$laporan->pembangkit->tahun_pembuatan}}" 	id='shorttitle' placeholder="Tahun Pembuatan"  />

                                </div>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                                                </span>A. Sertifikasi Kompetensi Tenaga Teknik Ketenagalistrikan</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="well well-sm well-primary">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                            <div class="panel-group" id="accordionz">

                                                            @foreach($laporan->pembangkit->company->skttks as $key => $skttk)
                                                                <div class="panel panel-default template">
                                                                    <div class="panel-heading">
                                                                       <a class="glyphicon glyphicon-remove-circle pull-right " style="margin-right:50px;">Hapus</a>
                                                                       <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionz" href="#collapse{{++$key}}"> Operator #{{$key}}</a> </h4>
                                                                    </div>
                                                                    <div id="collapse{{$key}}" class="panel-collapse collapse in operator">
                                                                    <div class="panel-body">
                                                                        <div class="form-group ">
                                                                           <label>Nama Operator</label>
                                                                           <div class="form-group form-float"> <input class="form-control show-tick" value="{{$skttk->nama}}" name="nama[]" required  placeholder="Nama Operator"> </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                           <label>Penerbit</label>
                                                                           <div class="form-group form-float"> <input class="form-control show-tick"  value="{{$skttk->penerbit}}" name="penerbit[]" required  placeholder="Penerbit Operator"> </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                           <label>Nomor</label>
                                                                           <div class="form-group form-float"> <input class="form-control show-tick" name="nomor[]" required  placeholder="Nomor"  value="{{$skttk->nomor}}" > </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                           <label>Tanggal</label>
                                                                           <div class="form-group form-float"> <input class="form-control show-tick"  value="{{$skttk->tanggal}}"  name="tanggal[]" required  placeholder="Tanggal" type="date"> </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                           <label>Bidang</label>
                                                                           <div class="form-group form-float"> <input  value="{{$skttk->bidang}}"  class="form-control show-tick" name="bidang[]" required  placeholder="Bidang"> </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                           <label>Level</label>
                                                                           <div class="form-group form-float"> <input  value="{{$skttk->level}}" class="form-control show-tick" name="level[]" required  placeholder="Level"> </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                           <label>Keterangan</label>
                                                                           <div class="form-group form-float"> <input class="form-control show-tick" name="ket[]" required  value="{{$skttk->ket}}" placeholder="Keterangan"> </div>
                                                                        </div>
                                        							</div>
                                                                </div>
                                                            </div>
                                                            @endforeach


                                                </div>
                                                <button class="btn btn-primary btn-add-panel" type="button"> <i class="glyphicon glyphicon-plus"></i> Tambah Operator</button>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th-list">
                                                </span>B. Mesin Penggerak</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="well well-sm well-primary">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="grantpo">Jenis Turbin</label>
                                                            <input required  type="text" value="{{$laporan->pembangkit->mesin_jenis_turbin}}" placeholder="Jenis Turbin (Air/Diesel/Uap/dst.)" name="mesin_jenis_turbin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Merek Pembuat</label>
                                                            <input required  type="text"  value="{{$laporan->pembangkit->mesin_merk_pembuat}}" placeholder="Merek Pembuat Mesin" name="mesin_merk_pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Negara Pembuat</label>
                                                            <input required  type="text" name="mesin_negara_pembuat"  value="{{$laporan->pembangkit->mesin_negara_pembuat}}" placeholder="Negara Pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tahun Pembuatan</label>
                                                            <input required  type="number" name="mesin_tahun_pembuatan"  value="{{$laporan->pembangkit->mesin_tahun_pembuatan}}" placeholder="Tahun Pembuatan Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tipe / Seri Mesin</label>
                                                            <input required  type="text" name="mesin_tipe_seri_mesin"  value="{{$laporan->pembangkit->mesin_tipe_seri_mesin}}" placeholder="Tipe / Seri Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Kapasitas</label>
                                                            <input required  type="text" name="mesin_kapasitas" value="{{$laporan->pembangkit->mesin_kapasitas}}"  placeholder="Kapasitas Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-th-list">
                                                </span>C. Generator</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="well well-sm well-primary">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="grantpo">Merk Pembuat</label>
                                                            <input required  type="text" placeholder="Merek Pembuat"  value="{{$laporan->pembangkit->mesin_merk_pembuat}}" name="generator_merk_pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Negara Pembuat</label>
                                                            <input required  type="text" name="generator_negara_pembuat"  value="{{$laporan->pembangkit->generator_negara_pembuat}}" placeholder="Negara Pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tahun Pembuatan</label>
                                                            <input required  type="number" name="generator_tahun_pembuatan"  value="{{$laporan->pembangkit->generator_tahun_pembuatan}}"  placeholder="Tahun Pembuatan Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tipe / Seri Mesin</label>
                                                            <input required  type="text" name="generator_tipe_seri_mesin"  value="{{$laporan->pembangkit->generator_tipe_seri_mesin}}" placeholder="Tipe / Seri Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Kapasitas</label>
                                                            <input required  type="text" name="generator_kapasitas"  value="{{$laporan->pembangkit->generator_kapasitas}}" placeholder="Kapasitas Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Fasa</label>
                                                            <input required  type="text" name="generator_fasa"  value="{{$laporan->pembangkit->generator_fasa}}" placeholder="Fasa" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Frekuensi</label>
                                                            <input required  type="text" name="generator_frekuensi"  value="{{$laporan->pembangkit->generator_frekuensi}}"  placeholder="Frekuensi" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tegangan</label>
                                                            <input required  type="text" name="generator_tegangan"  value="{{$laporan->pembangkit->generator_tegangan}}" placeholder="Tegangan" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Arus</label>
                                                            <input required  type="text" name="generator_arus"  value="{{$laporan->pembangkit->generator_arus}}" placeholder="Arus" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Power Factor</label>
                                                            <input required  type="text" name="generator_power_factor"  value="{{$laporan->pembangkit->generator_power_factor}}" placeholder="Power Factor" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Daya</label>
                                                            <input required  type="text" name="generator_daya" placeholder="Daya"  value="{{$laporan->pembangkit->generator_daya}}" class="form-control" id="grantpo">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-th-list">
                                                </span>D. Laporan</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="well well-sm well-primary">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="grantpo">Bahan Bakar Yang Digunakan</label>
                                                            <input required type="text" placeholder="Bahan Bakar Yang Digunakan" name="jenis_bahan_bakar" class="form-control" id="grantpo" value="{{$laporan->jenis_bahan_bakar}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Jumlah Konsumsi Bahan Bakar (L atau Ton atau L/det)</label>
                                                            <input required type="text" name="konsumsi_bahan_bakar" placeholder="Jumlah Konsumsi Bahan Bakar" class="form-control" id="grantpo" value="{{$laporan->konsumsi_bahan_bakar}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Pelumas Yang Digunakan</label>
                                                            <input required type="text" name="jenis_pelumas" placeholder="Jenis Pelumas Yang Digunakan" class="form-control" id="grantpo" value="{{$laporan->jenis_pelumas}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Jumlah Konsumsi Pelumas (L)</label>
                                                            <input required type="text" name="konsumsi_pelumas" placeholder="Jumlah Konsumsi Pelumas" class="form-control" id="grantpo" value="{{$laporan->konsumsi_pelumas}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Penoperasian Mesin (jam)</label>
                                                            <input required type="text" name="waktu_operasi_mesin" placeholder="Waktu Operasi Mesin" class="form-control" id="grantpo" value="{{$laporan->waktu_operasi_mesin}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Produksi Listrik (kWh)</label>
                                                            <input required type="text" name="produksi_listrik" placeholder="Produksi Listrik" class="form-control" id="grantpo" value="{{$laporan->produksi_listrik}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Jumlah Kerusakan</label>
                                                            <input required type="text" name="jumlah_kerusakan" placeholder="Jumlah Kerusakan" class="form-control" id="grantpo" value="{{$laporan->jumlah_kerusakan}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class="glyphicon glyphicon-th-list">
                                                </span>E. Sambungan Listrik Dari Dan Kepada Pihak Lain</a>
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="well well-sm well-primary">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="grantpo">Badan Usaha</label>
                                                            <input required type="text" name="sambungan_badan_usaha" placeholder="Badan Usaha" class="form-control" id="grantpo" value="{{$laporan->sambungan_badan_usaha}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Input & Output (kva)</label>
                                                            <input required type="text" name="sambungan_in_out" placeholder="Input & Output (kva)" class="form-control" id="grantpo" value="{{$laporan->sambungan_in_out}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Rata-rata Daya  (kWh / Bulan)</label>
                                                            <input required type="text" name="sambungan_rata_rata" placeholder="Rata-rata Daya  (kWh / Bulan)" class="form-control" id="grantpo" value="{{$laporan->sambungan_rata_rata}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Cara Transmisi / Distribusi</label>
                                                            <input required type="text" name="sambungan_cara_distribusi" placeholder="Cara Transmisi / Distribusi" class="form-control" id="grantpo" value="{{$laporan->sambungan_cara_distribusi}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
        			</div>
        		</div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn">Reset</button>
                </div>
            </div>
        </form>

                </div>

            </div>
        </div>
        <!-- /.col -->
    </div>


</section>

@endsection
@section('plugin')
<link rel="stylesheet" href="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap.css">
<!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<!-- DataTables -->
<script src="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{ url('/') }}/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ url('/') }}/assets/plugins/fastclick/fastclick.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#myTable').DataTable();
});

$('.select').select2({
    language: "id",
    allowClear: true
});

$('#perusahaan').change( function() {
    company_id = this.value;
    $.ajax({
        url: "{{ url('/') }}/api/pembangkit/perusahaan/"+company_id,
        type: "GET",
        dataType: "html",
        success: function (result) {
            $.each(JSON.parse(result), function(k, v) {
                 $("#pembangkit").append("<option value='"+v.id+"' selected>"+v.no_sertifikat+' - '+v.no_registrasi+"</option>");
            });
        }
    });
});

$('#pembangkit').change( function() {
    pembangkit_id = this.value;
    $.ajax({
        url: "{{ url('/') }}/api/pembangkit/"+pembangkit_id,
        type: "GET",
        dataType: "html",
        success: function (result) {
            var value = JSON.parse(result);
             $("input[name=tgl_berlaku]").val(value.tgl_berlaku);
             $("input[name=tgl_berakhir]").val(value.tgl_berakhir);
             $("input[name=no_sertifikat]").val(value.no_sertifikat);
             $("input[name=no_registrasi]").val(value.no_registrasi);
             $("input[name=tahun_pembuatan]").val(value.tahun_pembuatan);
             $("input[name=mesin_jenis_turbin]").val(value.mesin_jenis_turbin);
             $("input[name=mesin_merk_pembuat]").val(value.mesin_merk_pembuat);
             $("input[name=mesin_negara_pembuat]").val(value.mesin_negara_pembuat);
             $("input[name=mesin_tahun_pembuatan]").val(value.mesin_tahun_pembuatan);
             $("input[name=mesin_tipe_seri_mesin]").val(value.mesin_tipe_seri_mesin);
             $("input[name=mesin_kapasitas]").val(value.mesin_kapasitas);
             $("input[name=generator_merk_pembuat]").val(value.generator_merk_pembuat);
             $("input[name=generator_negara_pembuat]").val(value.generator_negara_pembuat);
             $("input[name=generator_tahun_pembuatan]").val(value.generator_tahun_pembuatan);
             $("input[name=generator_tipe_seri_mesin]").val(value.generator_tipe_seri_mesin);
             $("input[name=generator_kapasitas]").val(value.generator_kapasitas);
             $("input[name=generator_fasa]").val(value.generator_fasa);
             $("input[name=generator_frekuensi]").val(value.generator_frekuensi);
             $("input[name=generator_tegangan]").val(value.generator_tegangan);
             $("input[name=generator_arus]").val(value.generator_arus);
             $("input[name=generator_power_factor]").val(value.generator_power_factor);
             $("input[name=generator_daya]").val(value.generator_daya);
             $('.template').remove();
             $.ajax({
                 url: "{{ url('/') }}/api/skttk/perusahaan/"+value.company_id,
                 type: "GET",
                 dataType: "html",
                 success: function (result2) {
                     var hash = 0;
                     $.each(JSON.parse(result2), function(k2, v2) {
                          var appends = '<div class="panel panel-default template"> <div class="panel-heading"> <a class="glyphicon glyphicon-remove-circle pull-right " style="margin-right:50px;">Hapus</a> <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionz" href="#collapse'+(++hash)+'"> Operator #'+hash+'</a> </h4> </div> <div id="collapse'+hash+'" class="panel-collapse collapse in"> <div class="panel-body"> <div class="form-group "> <label>Nama Operator</label> <div class="form-group form-float"> <input class="form-control show-tick" value="'+v2.nama+'" name="nama[]" required  placeholder="Nama Operator"> </div> </div> <div class="form-group "> <label>Penerbit</label> <div class="form-group form-float"> <input class="form-control show-tick"  value="'+v2.penerbit+'" name="penerbit[]" required  placeholder="Penerbit Operator"> </div> </div> <div class="form-group "> <label>Nomor</label> <div class="form-group form-float"> <input class="form-control show-tick" name="nomor[]" required  placeholder="Nomor"  value="'+v2.nama+'" > </div> </div> <div class="form-group "> <label>Tanggal</label> <div class="form-group form-float"> <input class="form-control show-tick"  value="'+v2.tanggal+'"  name="tanggal[]" required  placeholder="Tanggal" type="date"> </div> </div> <div class="form-group "> <label>Bidang</label> <div class="form-group form-float"> <input  value="'+v2.bidang+'"  class="form-control show-tick" name="bidang[]" required  placeholder="Bidang"> </div> </div> <div class="form-group "> <label>Level</label> <div class="form-group form-float"> <input  value="'+v2.level+'" class="form-control show-tick" name="level[]" required  placeholder="Level"> </div> </div> <div class="form-group "> <label>Keterangan</label> <div class="form-group form-float"> <input class="form-control show-tick" name="ket[]" required  value="'+v2.ket+'" placeholder="Keterangan"> </div> </div>';
                          $(appends).appendTo('#accordionz').hide().fadeIn(900);
                     });
                 }
             });

        }
    });
});
$(".btn-add-panel").on("click", function () {
    var hash = $(".template").length;
    $('.abc').removeClass("in");
    var appends =
    '<div class="panel panel-default template"> <div class="panel-heading"> <a class="glyphicon glyphicon-remove-circle pull-right " style="margin-right:50px;">Hapus</a> <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionz" href="#collapse'+(++hash)+'"> Operator #'+hash+'</a> </h4> </div> <div id="collapse'+hash+'" class="panel-collapse collapse in"> <div class="panel-body"> <div class="form-group "> <label>Nama Operator</label> <div class="form-group form-float"> <input class="form-control show-tick" name="nama[]" required  placeholder="Nama Operator"> </div> </div> <div class="form-group "> <label>Penerbit</label> <div class="form-group form-float"> <input class="form-control show-tick" name="penerbit[]" required  placeholder="Penerbit Operator"> </div> </div> <div class="form-group "> <label>Nomor</label> <div class="form-group form-float"> <input class="form-control show-tick" name="nomor[]" required  placeholder="Nomor"> </div> </div> <div class="form-group "> <label>Tanggal</label> <div class="form-group form-float"> <input class="form-control show-tick" name="tanggal[]" required  placeholder="Tanggal" type="date"> </div> </div> <div class="form-group "> <label>Bidang</label> <div class="form-group form-float"> <input class="form-control show-tick" name="bidang[]" required  placeholder="Bidang"> </div> </div> <div class="form-group "> <label>Level</label> <div class="form-group form-float"> <input class="form-control show-tick" name="level[]" required  placeholder="Level"> </div> </div> <div class="form-group "> <label>Keterangan</label> <div class="form-group form-float"> <input class="form-control show-tick" name="ket[]" required  placeholder="Keterangan"> </div> </div>';
    $(appends).appendTo("#accordionz").hide().fadeIn(900);
     $('#collapse'+hash).addClass('in');

});

$(document).on('click', '.glyphicon-remove-circle', function () {
    $(this).parents('.panel').get(0).remove();
});
</script>
@endsection
