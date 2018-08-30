@extends('admin.layout')

@section('content')
<?php
$bulan = array(
  '1' => 'Januari',
  '2' => 'Februari',
  '3' => 'Maret',
  '4' => 'April',
  '5' => 'Mei',
  '6' => 'Juni',
  '7' => 'July',
  '8' => 'Agustus',
  '9' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember',
   );

$token_status = array('0' => 'Belum Di isi','1'=>'Sudah Di isi' ); ?>
<style type="text/css">
  div.disabled
{
  pointer-events: none;

  /* for "disabled" effect */
  opacity: 0.5;
  background: #CCC;
}
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Laporan  <br> {{$pembangkits->company->nama}}
  </h1>
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
              <th>Bulan</th>
              <th>Waktu Pengisian</th>
              <th>Status Laporan</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pembangkits->laporan as $key => $var)

            <tr>
              <td><?php echo $key+1; ?></td>
              <td><?php echo $bulan[$var->created_at->month].' '.$var->created_at->year ?></td>
              <td><?php echo $var->updated_at ?></td>
              <td><?php echo $token_status[1] ?></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo url('laporan/modal_laporan/'.$var->id) ?>" data-toggle="modal" data-target="#ModalFormat<?php echo $var->id?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <!-- /.row -->
              <div class="modal fade custom-width" id="ModalFormat<?php echo $var->id?>"  tabindex="-1" role="dialog" aria-labelledby="ModalFormat" aria-hidden="true">
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


      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
         <h3>Reminder</h3>
          <div class="col-sm-12 ">
          <?php $q = \DB::table('alert')->select(\DB::raw('count(id) as c'))->where('pembangkit_id', $pembangkits->id)->where('bulan', date('m'))->where('tahun', date('Y'))->first();
          $c = $q->c;?>

          <!-- alert 1 -->
            <div class="box box-info <?php if ($c != 0): ?>disabled<?php endif ?>">
                <div class="box-header with-border">

                </div>
                <div class="col-sm-3">
                    <div class="tile-block tile-aqua">
                        <div class="tile-header">
                            <i class="glyphicon glyphicon-bullhorn"></i><a href="#">Peringatan 1<span></span> </a>
                        </div>
                        <form class="form-vertical" method="get" action="<?php echo url('laporan/alert/'.$pembangkits->id.'/'.date('m').'/'.date('Y').'/1')?>">
                        <input type="hidden" name="d" value="<?php echo MD5(date('r')) ?>">
                        <div class="tile-content">
                          <p>Waktu Pengiriman</p>
                          <p><?php echo date('Y-m-d H:i:s')?></p>
                        </div>
                        <div class="tile-footer">
                            <center><button type="submit" class="btn btn-success"><i class="fa fa-plane"></i> Kirim</button></center>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <!-- alert 2 -->
            <div class="box box-info <?php if ($c != 1): ?>disabled<?php endif ?>">
                <div class="box-header with-border">

                </div>
                <div class="col-sm-3">
                    <div class="tile-block tile-red">
                        <div class="tile-header">
                            <i class="glyphicon glyphicon-bullhorn"></i><a href="#">Peringatan 2<span></span> </a>
                        </div>
                        <form class="form-vertical" method="get" action="<?php echo url('laporan/alert/'.$pembangkits->id.'/'.date('m').'/'.date('Y').'/2')?>">
                        <input type="hidden" name="d" value="<?php echo MD5(date('r')) ?>">
                        <div class="tile-content">
                          <p>Waktu Pengiriman</p>
                          <p><?php echo date('Y-m-d H:i:s')?></p>
                        </div>
                        <div class="tile-footer">
                            <center><button type="submit" class="btn btn-success"><i class="fa fa-plane"></i> Kirim</button></center>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <!-- alert 3 -->
            <div class="box box-info <?php if ($c != 2): ?>disabled<?php endif ?>">
                <div class="box-header with-border">

                </div>
                <div class="col-sm-3">
                    <div class="tile-block tile-green">
                        <div class="tile-header">
                            <i class="glyphicon glyphicon-bullhorn"></i><a href="#">Peringatan 3<span></span> </a>
                        </div>
                        <form class="form-vertical" method="get" action="<?php echo url('laporan/alert/'.$pembangkits->id.'/'.date('m').'/'.date('Y').'/3')?>">
                        <input type="hidden" name="d" value="<?php echo MD5(date('r')) ?>">
                        <div class="tile-content">
                          <p>Waktu Pengiriman</p>
                          <p><?php echo date('Y-m-d H:i:s')?></p>
                        </div>
                        <div class="tile-footer">
                            <center><button type="submit" class="btn btn-success"><i class="fa fa-plane"></i> Kirim</button></center>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <!-- alert 4 -->
            <div class="box box-info <?php if ($c != 3): ?>disabled<?php endif ?>">
                <div class="box-header with-border">

                </div>
                <div class="col-sm-3">
                    <div class="tile-block tile-purple">
                        <div class="tile-header">
                            <i class="glyphicon glyphicon-bullhorn"></i><a href="#">Peringatan 4<span></span> </a>
                        </div>
                        <form class="form-vertical" method="get" action="<?php echo url('laporan/alert/'.$pembangkits->id.'/'.date('m').'/'.date('Y').'/4')?>">
                        <input type="hidden" name="d" value="<?php echo MD5(date('r')) ?>">
                        <div class="tile-content">
                          <p>Waktu Pengiriman</p>
                          <p><?php echo date('Y-m-d H:i:s')?></p>
                        </div>
                        <div class="tile-footer">
                            <center><button type="submit" class="btn btn-success"><i class="fa fa-plane"></i> Kirim</button></center>
                        </form>
                    </div>
                </div>
            </div>
            </div>


          </div>
        </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


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
