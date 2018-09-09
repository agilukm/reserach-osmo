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
                <li class="breadcrumb-item">Pengguna</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Data Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="{{url('user')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Nama</p>
                                    <input type="text" required class="form-control input-default " placeholder="Nama" name="name" >
                                </div>
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Email</p>
                                    <input type="email" class="form-control input-default " placeholder="Email" name="email" required >
                                </div>
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Password</p>
                                    <input type="password" class="form-control input-default " placeholder="Password" name="password" required >
                                </div>
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Role</p>
                                    <select required class="form-control input-default" name="roles">
                                        <option value="">Pilih</option>
                                        <option value="admin">Admin</option>
                                        <option value="cabdin">CABANG DINAS</option>
                                    </select>
                                </div>
                                <center><button type="submit" class="btn btn-success" name="button">Simpan</button></center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# row -->

        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
</div>
<!-- End Page wrapper  -->

@endsection
