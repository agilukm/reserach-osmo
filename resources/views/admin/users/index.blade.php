@extends('admin.layout')
@section('content')

<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pengguna</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Pengguna</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pengguna</h4>
                        <h6 class="card-subtitle">Data Pengguna</h6>
                        <div class="table-responsive m-t-40">
                            <a href="{{url('/user')}}/tambah"><button type="button" class="btn btn-success pull-right" name="button">Tambah</button></a>
                            <table id="myTable" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width='1%'>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $value): ?>
                                        <tr class="{{$key}}">
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->roles}}                                                
                                            </td>
                                            <td>
                                                <a href="user/{{$value->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                                <button type="button" name="hapus" id="{{$key}}" class="conf btn btn-danger" value="user/{{$value->id}}">Hapus</button>
                                            </td>
                                        </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->
@endsection
