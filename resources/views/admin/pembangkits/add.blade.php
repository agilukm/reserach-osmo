@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        PEMBANGKIT
    </h1>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Tambah Data Pembangkit Perusahaan</div>
                </div>

            <form role="form" id="form1" action="{{url('/pembangkit')}}" method="post" class="validate">
                <div class="panel-body">
                    <div class="row item-description">
                    	<div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Perusahaan</label>
                                    <select class="form-control select2" name="company_id" required>
                                        @foreach($companies as $key => $company)
                                            <option value="{{$company->id}}">{{$company->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                                                </span>A. Data Pembangkit</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                            	<div class="well well-sm well-primary">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="grant1">Tanggal Berlaku</label>
                                                            <input required type="text" class="form-control daterangepickerz" name="tgl_berlaku" placeholder="Tanggal Berlaku" value=""  />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grant2">Tanggal Berakhir</label>
                                                            <input required type="text" name="tgl_berakhir" class="form-control daterangepickerz" value="" id='grant2' placeholder="Tanggal Berakhir"  />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shorttitle">Nomor Sertifikat</label>
                                                            <input required type="text" name="no_sertifikat" class="form-control" value="" 	id='shorttitle' placeholder="Nomor Registrasi"  />

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shorttitle">Nomor Registrasi</label>
                                                            <input required type="text" name="no_registrasi" class="form-control" value="" 	id='shorttitle' placeholder="Nomor Registrasi"  />

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shorttitle">Tahun Pembuatan</label>
                                                            <input required type="text" name="tahun_pembuatan" class="form-control" value="" 	id='shorttitle' placeholder="Tahun Pembuatan"  />

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
                                                            <input required type="text" placeholder="Jenis Turbin (Air/Diesel/Uap/dst.)" name="mesin_jenis_turbin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Merk / Pembuat</label>
                                                            <input required type="text" placeholder="Jenis Turbin (Air/Diesel/Uap/dst.)" name="mesin_merk_pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Negara Pembuat</label>
                                                            <input required type="text" name="mesin_negara_pembuat" placeholder="Negara Pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tahun Pembuatan</label>
                                                            <input required type="text" name="mesin_tahun_pembuatan" placeholder="Tahun Pembuatan Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tipe / Seri Mesin</label>
                                                            <input required type="text" name="mesin_tipe_seri_mesin" placeholder="Tipe / Seri Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Kapasitas</label>
                                                            <input required type="text" name="mesin_kapasitas" placeholder="Kapasitas Mesin" class="form-control" id="grantpo">
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
                                                            <input required type="text" placeholder="Merk Pembuat" name="generator_merk_pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Negara Pembuat</label>
                                                            <input required type="text" name="generator_negara_pembuat" placeholder="Negara Pembuat" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tahun Pembuatan</label>
                                                            <input required type="text" name="generator_tahun_pembuatan" placeholder="Tahun Pembuatan Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tipe / Seri Mesin</label>
                                                            <input required type="text" name="generator_tipe_seri_mesin" placeholder="Tipe / Seri Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Kapasitas</label>
                                                            <input required type="text" name="generator_kapasitas" placeholder="Kapasitas Mesin" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Fasa</label>
                                                            <input required type="text" name="generator_fasa" placeholder="Fasa" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Frekuensi</label>
                                                            <input required type="text" name="generator_frekuensi" placeholder="Frekuensi" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Tegangan</label>
                                                            <input required type="text" name="generator_tegangan" placeholder="Tegangan" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Arus</label>
                                                            <input required type="text" name="generator_arus" placeholder="Arus" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Power Factor</label>
                                                            <input required type="text" name="generator_power_factor" placeholder="Power Factor" class="form-control" id="grantpo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grantpo">Daya</label>
                                                            <input required type="text" name="generator_daya" placeholder="Daya" class="form-control" id="grantpo">
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
<script type="text/javascript">$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
@endsection
