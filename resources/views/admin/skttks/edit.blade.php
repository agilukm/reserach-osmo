@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SKTTK
    </h1>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Edit Data SKTTK Perusahaan</div>
                </div>
                <div class="panel-body">

                    <form role="form" id="form1" action="{{url('/skttk/'.$skttk->id)}}" method="post" class="validate">
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label class="control-label">Nama Perusahaan</label>
                            <select required class="form-control" name="company_id">
                                @foreach($companies as $key => $company)
                                    <option value="{{$company->id}}" @if($skttk->company_id == $company->id) selected @endif>{{$company->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nama Tenaga Kerja</label>
                            <input type="text" required class="form-control" name="nama"  placeholder="Nama Tenaga Kerja" value="{{$skttk->nama}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Penerbit</label>
                            <input type="text" required class="form-control" name="penerbit" placeholder="Penerbit" value="{{$skttk->penerbit}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nomor</label>
                            <input type="text" required class="form-control" name="nomor" placeholder="Nomor" value="{{$skttk->nomor}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <input type="text" required class="form-control daterangepickerz" name="tanggal" placeholder="Tanggal" value="{{$skttk->tanggal}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Bidang</label>
                            <input type="text" required class="form-control" name="bidang" placeholder="Bidang" value="{{$skttk->bidang}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Level</label>
                            <input type="text" required class="form-control" name="level" placeholder="Level" value="{{$skttk->level}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <input type="text" required class="form-control" name="ket" placeholder="Keterangan" value="{{$skttk->ket}}">
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
