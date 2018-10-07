@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Perusahaan
    </h1>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Edit Data Perusahaan</div>
                </div>
                <div class="panel-body">

                    <form role="form" id="form1" action="{{url('/perusahaan')}}/{{$company->id}}" method="post" class="validate">
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label class="control-label">Nama Perusahaan</label>
                            <input type="hidden" required class="form-control" name="_method" placeholder="Nama Perusahaan" value="patch">
                            <input type="text" required class="form-control" name="nama" placeholder="Nama Perusahaan" value="{{$company->nama}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Alamat Perusahaan</label>
                            <input type="alamat" required class="form-control" name="alamat"  placeholder="Alamat Perusahaan"  value="{{$company->alamat}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="Email Perusahaan"  value="{{$company->email}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Jenis Izin</label>
                            <select class="form-control" name="jenis_izin">
                                <option value="IO">IO</option>
                                <option value="SKT">SKT</option>
                                <option value="25KVA">25KVA</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kabupaten / Kota</label>

                            <input type="text" class="form-control" name="kota" placeholder="Kabupaten / Kota"  value="{{$company->kota}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nomor Pertek</label>

                            <input type="text" class="form-control" name="nomor_pertek" placeholder="Nomor Pertek Perusahaan"  value="{{$company->nomor_pertek}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Tanggal Pertek</label>
                            <input type="text" required class="form-control daterangepickerz" name="tgl_pertek"  value="{{$company->tgl_pertek}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nomor DPMPTSP</label>

                            <input type="text" required class="form-control" name="nomor_dpmptsp"  value="{{$company->nomor_dpmptsp}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Tanggal Terbit</label>

                            <input type="text" class="form-control daterangepickerz" name="tgl_terbit"  value="{{$company->tgl_terbit}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Tanggal Berlaku</label>

                            <input type="text" class="form-control daterangepickerz" name="tgl_berlaku"  value="{{$company->tgl_berlaku}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Tanggal Berakhir</label>

                            <input type="text" class="form-control daterangepickerz" name="tgl_berakhir"  value="{{$company->tgl_berakhir}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tahun Terbit</label>

                            <input type="text" class="form-control" name="tahun"  value="{{$company->tahun}}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn">Reset</button>
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
