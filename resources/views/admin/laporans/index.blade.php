@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Laporan
    </h1>
    <div class="float-right" style="float: right;">
        <a href="{{url('/laporan/tambah')}}"> <button type="button" class="btn btn-danger">Tambah</button> </a>
    </div>
    <br>
    <br>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

            <div class="col-md-12">

				<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
					<li class="active">
						<a href="#home" data-toggle="tab" aria-expanded="true">
							<span class="visible-xs"><i class="entypo-home"></i></span>
							<span class="hidden-xs">Semua Laporan</span>
						</a>
					</li>
					<li class="">
						<a href="#profile" data-toggle="tab" aria-expanded="false">
							<span class="visible-xs"><i class="entypo-mail"></i></span>
							<span class="hidden-xs">Belum Membuat</span>
						</a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="home">

						<div>

                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Perusahaan</th>
                                        <th>No. Sertifikat Pembangkit</th>
                                        <th>Waktu Laporan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($laporans as $key => $laporan)
                                    <tr class="{{$key}}">
                                        <td>{{$key+1}}</td>
                                        <td>{{$laporan->pembangkit->company->nama}}</td>
                                        <td>{{$laporan->pembangkit->no_sertifikat}}</td>
                                        <td>{{$laporan->created_at}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="{{url('/laporan/')}}/{{$laporan->id}}"> <i class="glyphicon glyphicon-info-sign"></i> Edit</a></center></li>
                                                    <input type="hidden" name=""  value="{{url('/laporan/')}}/{{$laporan->id}}" id="value{{$key}}">
                                                    <li> <a href="#" name="hapus" id="{{$key}}" class="conf"><i class="glyphicon glyphicon-info-sign"></i>  Hapus</a></center></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <div class="modal fade custom-width" id="ModalFormat{{$laporan->id}}"  tabindex="-1" role="dialog" aria-labelledby="ModalFormat" aria-hidden="true">
                                        <div class="modal-dialog" style="width: 96%">
                                            <div class="modal-content">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>

                            </table>
						</div>

					</div>
					<div class="tab-pane" id="profile">

                        <table id="myTable2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Jumlah Pembangkit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pembangkit_expired as $key => $perusahaan)
                                <?php
                                    if(count(\DB::select('select * from laporan left join pembangkit on pembangkit.id = laporan.pembangkit_id where status = 0 and company_id = '.$perusahaan->company_id)) != 0):
                                        continue;
                                    endif
                                ?>
                                <tr class="pembangkit{{$key}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$perusahaan->nama}} {{$perusahaan->company_id}}</td>
                                    <td>{{\DB::table('pembangkit')->where('company_id', $perusahaan->company_id)->count()}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <input type="hidden" name=""  value="{{url('/laporan/bulk_email/')}}/{{$perusahaan->id}}" id="valuepembangkit{{$key}}">
                                                <li> <a href="#" name="email" id="pembangkit{{$key}}" class="email"><i class="glyphicon glyphicon-info-sign"></i>  Kirim Email</a></center></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
					</div>
			</div>

            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">

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

var table2 = $('#myTable2').DataTable();

$('.email').click( function() {
    console.log($('#value'+this.id).val(), this.id, this.name, 'GET');
    var conf = confirms($('#value'+this.id).val(), this.id, this.name, 'GET');
});

function confirms(uri, id, name, type){
    console.log(id);
    swal({
        title: "Data akan di"+name,
        text: "Apakah anda yakin?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        confirmButtonText: "Yakin",
        cancelButtonText: "Batal",
        confirmButtonColor: "#ec6c62"
    }, function (isConfirm) {
        if (!isConfirm) return;
        table2.row($('.'+id)).remove().draw( false );
        $.ajax({
            url: uri,
            type: type,
            dataType: "html",
            success: function () {
                var asd = table2.row($('.'+id)).remove().draw( false );
                if(asd)
                {
                    swal("Behasil!", "Data berhasil di"+name, "success");
                }
            },

            error: function (xhr, ajaxOptions, thrownError) {
                swal("Behasil!", "Data berhasil di"+name, "success");
            }
        });
    });
}
</script>
@endsection
