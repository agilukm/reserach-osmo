@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SKTTK
    </h1>
    <div class="float-right" style="float: right;">
        <a href="{{url('/access/tambah')}}"> <button type="button" class="btn btn-danger">Tambah</button> </a>
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
                                <th>Pengguna</th>
                                <th>KOTA</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($accesses as $key => $access)
                            <tr class="{{$key}}">
                                <td>{{$key+1}}</td>
                                <td>{{$access->user->name}}</td>
                                @php $kotas = \DB::table('accesses')->where('user_id', $access->user_id)->get(); @endphp
                                <td>
                                @foreach($kotas as $kota)
                                    {!! $kota->kota. '<br>' !!}
                                @endforeach
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li> <a href="{{url('/access/')}}/{{$access->id}}"> <i class="glyphicon glyphicon-info-sign"></i> Edit</a></center></li>
                                            <input type="hidden" name=""  value="{{url('/access/')}}/{{$access->id}}" id="value{{$key}}">
                                            <li> <a name="hapus" id="{{$key}}" class="conf"><i class="glyphicon glyphicon-info-sign"></i>  Hapus</a></center></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.row -->
                            <div class="modal fade custom-width" id="ModalFormat{{$access->id}}"  tabindex="-1" role="dialog" aria-labelledby="ModalFormat" aria-hidden="true">
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
