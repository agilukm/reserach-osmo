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

                    <form role="form" id="form1" action="{{url('/access/'.$access->id)}}" method="post" class="validate">
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label class="control-label">Pengguna</label>
                            <select required class="form-control select2" name="user_id" readonly>
                                <option value="{{$access->user_id}}">{{$access->user->name}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kota</label>
                            <select required class="form-control select2 multiple" name="kotas[]" readonly multiple>
                                @php $access = \DB::table('accesses')->where('user_id', $access->user_id)->get(); $all = array(); @endphp
                                @foreach($access as $key => $acc)
                                    @php $all[] = $acc->kota; @endphp
                                @endforeach
                                @foreach($kotas as $key => $kota)
                                    <option value="{{$kota->kota}}" <?php if(in_array($kota->kota, $all)){  echo 'selected'; } ?> > {{$kota->kota}}</option>
                                @endforeach
                            </select>
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
