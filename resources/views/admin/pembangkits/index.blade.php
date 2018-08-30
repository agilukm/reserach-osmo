@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        PEMBANGKIT
    </h1>
    <div class="float-right" style="float: right;">
        <a href="{{url('/pembangkit/tambah')}}"> <button type="button" class="btn btn-danger">Tambah</button> </a>
    </div>
    <br>
    <br>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Perusahaan</th>
                                <th>Tanggal Berlaku</th>
                                <th>Tanggal Berakhir</th>
                                <th>No Sertifikat</th>
                                <th>No Registrasi</th>
                                <th>Tahun Pembuatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pembangkits as $key => $pembangkit)
                            <tr class="{{$key}}">
                                <td>{{$key+1}}</td>
                                <td>{{$pembangkit->company->nama}}</td>
                                <td>{{$pembangkit->tgl_berlaku}}</td>
                                <td>{{$pembangkit->tgl_berakhir}}</td>
                                <td>{{$pembangkit->no_sertifikat}}</td>
                                <td>{{$pembangkit->no_registrasi}}</td>
                                <td>{{$pembangkit->tahun_pembuatan}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li> <a href="{{url('/laporan/format/')}}/{{$pembangkit->id}}"> <i class="glyphicon glyphicon-info-sign"></i> Format Laporan</a></center></li>
                                            <li> <a href="{{url('/pembangkit/')}}/{{$pembangkit->id}}"> <i class="glyphicon glyphicon-info-sign"></i> Edit</a></center></li>
                                            <input type="hidden" name=""  value="{{url('/pembangkit/')}}/{{$pembangkit->id}}" id="value{{$key}}">
                                            <li> <a name="hapus" id="{{$key}}" class="conf"><i class="glyphicon glyphicon-info-sign"></i>  Hapus</a></center></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.row -->
                            <div class="modal fade custom-width" id="ModalFormat{{$pembangkit->id}}"  tabindex="-1" role="dialog" aria-labelledby="ModalFormat" aria-hidden="true">
                                <div class="modal-dialog" style="width: 96%">
                                    <div class="modal-content">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
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
