<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="E-Osmosys" />
	<meta name="author" content="" />

	<link rel="icon" href="<?php echo url('/assets/')?>/images/favicon.ico">

	<title>E-OSMOSYS | Input Laporan</title>

	<link rel="stylesheet" href="<?php echo url('/assets/')?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo url('/assets/')?>/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="<?php echo url('/assets/')?>/css/neon.css">

	<script src="<?php echo url('/assets/')?>/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="<?php echo url('/assets/')?>/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>

<div class="wrap">

	<!-- Logo and Navigation -->
<div class="site-header-container container">

	<div class="row">

		<div class="col-md-12">

			<header class="site-header">

				<section class="site-logo">

					<a href="{{url('/')}}">
						<img src="<?php echo url('/assets/')?>/images/logo@2x.png" width="120" />
					</a>

				</section>


			</header>

		</div>

	</div>

</div>
	<!-- Breadcrumb -->
<?php
$bulan = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'July',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember',
   );
$rbulan = array(
  'Januari' => '01',
  'Februari' => '02',
  'Maret' => '03',
  'April' => '04',
  'Mei' => '05',
  'Juni' => '06',
  'July' => '07',
  'Agustus' => '08',
  'September' => '09',
  'Oktober' => '10',
  'November' => '11',
  'Desember' => '12',
   );
?>

<section class="portfolio-item-details">

	<div class="container">
		<?php
        if (!$laporan || $laporan->status != 0 ){
            ?>
			<center><h1><strong>Token Tidak Berlaku</strong></h1></center>
		<?php
    }else{ ?>
        <form method="post" action="<?php echo url('/laporan/input/'.$laporan->id) ?>">
            {{method_field('PATCH')}}
		<!-- Title and Item Details -->
		<div class="row item-title">

			<div class="col-sm-9">
                <h1>
                    Laporan Pelaksanaan
                </h1>
                <h4>
                    <b>
                        <a href="#">{{$laporan->pembangkit->company->nama}}</a>
                    </b>
                </h4>

                <div class="categories">
                    <a href="#">{{$laporan->pembangkit->company->alamat}}</a>
                </div>
			</div>

			<div class="col-sm-3">

				<div class="text-right">
					<div class="item-detail">
						<span>Date:</span>
						<?php echo date('d').' '.$bulan[date('m')].' '.date('Y') ?>
					</div>


				</div>

			</div>

		</div>



		<!-- Portfolio Description and Other Details -->
<div class="row item-description">

	<div class="col-sm-7">


        <input required type="hidden" class="form-control" name="status" placeholder="Tanggal Berlaku" value="1"  />
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Nama Perusahaan</label>
                    <select class="form-control" name="company_id" required id="perusahaan" placeholder="Pilih Data Perusahaan" readonly>
                            <option value="{{$laporan->pembangkit->company->id}}">{{$laporan->pembangkit->company->nama}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Pembangkit</label>
                    <select class="form-control" name="pembangkit_id" required id="pembangkit" placeholder="Pilih Nama Perusahaan Jika Data Pembangkit Kosong" readonly>
                        <option value="{{$laporan->pembangkit_id}}">{{$laporan->pembangkit->no_sertifikat}} - {{$laporan->pembangkit->no_registrasi}}</option>

                    </select>
                </div>
				<div class="form-group">
					<label for="grant1">Periode</label>
					<input required type="number" class="form-control" name="periode" placeholder="Periode" value="{{$laporan->periode}}"  />
				</div>
                <div class="form-group">
                    <label for="grant1">Tanggal Berlaku SLO</label>
                    <input required type="date" class="form-control daterangepickerz" name="tgl_berlaku" placeholder="Tanggal Berlaku" value="{{$laporan->pembangkit->tgl_berlaku}}"  />
                </div>
                <div class="form-group">
                    <label for="grant2">Tanggal Berakhir SLO</label>
                    <input required type="date" name="tgl_berakhir" class="form-control daterangepickerz" value="{{$laporan->pembangkit->tgl_berakhir}}" id='grant2' placeholder="Tanggal Berakhir"  />
                </div>
                <div class="form-group">
                    <label for="shorttitle">Nomor SLO</label>
                    <input required type="text" name="no_sertifikat" class="form-control" value="{{$laporan->pembangkit->no_sertifikat}}" 	id='shorttitle' placeholder="Nomor Registrasi"  />

                </div>
                <div class="form-group">
                    <label for="shorttitle">Nomor Registrasi SLO</label>
                    <input required type="text" name="no_registrasi" class="form-control" value="{{$laporan->pembangkit->no_sertifikat}}" 	id='shorttitle' placeholder="Nomor Registrasi"  />

                </div>
                <div class="form-group">
                    <label for="shorttitle">Tahun Pembuatan</label>
                    <input required type="number" name="tahun_pembuatan" class="form-control" value="{{$laporan->pembangkit->tahun_pembuatan}}" 	id='shorttitle' placeholder="Tahun Pembuatan"  />

                </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$laporan->id}}One"><span class="glyphicon glyphicon-file">
                                </span>A. Sertifikasi Kompetensi Tenaga Teknik Ketenagalistrikan</a>
                            </h4>
                        </div>
                        <div id="collapse{{$laporan->id}}One" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="well well-sm well-primary">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="panel-group" id="accordionz">

                                            @foreach($laporan->pembangkit->company->skttks as $key => $skttk)
                                                <div class="panel panel-default template">
                                                    <div class="panel-heading">
                                                       <a class="glyphicon glyphicon-remove-circle pull-right " style="margin-right:50px;">Hapus</a>
                                                       <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionz" href="#collapse{{$laporan->id}}{{++$key}}"> Operator #{{$key}}</a> </h4>
                                                    </div>
                                                    <div id="collapse{{$laporan->id}}{{$key}}" class="panel-collapse collapse in operator">
                                                    <div class="panel-body">
                                                        <div class="form-group ">
                                                           <label>Nama Operator</label>
                                                           <div class="form-group form-float"> <input class="form-control show-tick" value="{{$skttk->nama}}" name="nama[]" required  placeholder="Nama Operator"> </div>
                                                        </div>
                                                        <div class="form-group ">
                                                           <label>Penerbit</label>
                                                           <div class="form-group form-float"> <input class="form-control show-tick"  value="{{$skttk->penerbit}}" name="penerbit[]" required  placeholder="Penerbit Operator"> </div>
                                                        </div>
                                                        <div class="form-group ">
                                                           <label>Nomor</label>
                                                           <div class="form-group form-float"> <input class="form-control show-tick" name="nomor[]" required  placeholder="Nomor"  value="{{$skttk->nomor}}" > </div>
                                                        </div>
                                                        <div class="form-group ">
                                                           <label>Tanggal</label>
                                                           <div class="form-group form-float"> <input class="form-control show-tick"  value="{{$skttk->tanggal}}"  name="tanggal[]" required  placeholder="Tanggal" type="date"> </div>
                                                        </div>
                                                        <div class="form-group ">
                                                           <label>Bidang</label>
                                                           <div class="form-group form-float"> <input  value="{{$skttk->bidang}}"  class="form-control show-tick" name="bidang[]" required  placeholder="Bidang"> </div>
                                                        </div>
                                                        <div class="form-group ">
                                                           <label>Level</label>
                                                           <div class="form-group form-float"> <input  value="{{$skttk->level}}" class="form-control show-tick" name="level[]" required  placeholder="Level"> </div>
                                                        </div>
                                                        <div class="form-group ">
                                                           <label>Keterangan</label>
                                                           <div class="form-group form-float"> <input class="form-control show-tick" name="ket[]" required  value="{{$skttk->ket}}" placeholder="Keterangan"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach


                                </div>
                                <button class="btn btn-primary btn-add-panel" type="button"> <i class="glyphicon glyphicon-plus"></i> Tambah Operator</button>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$laporan->id}}Three"><span class="glyphicon glyphicon-th-list">
                                </span>B. Mesin Penggerak</a>
                            </h4>
                        </div>
                        <div id="collapse{{$laporan->id}}Three" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="well well-sm well-primary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="grantpo">Jenis Turbin</label>
                                            <input required  type="text" value="{{$laporan->pembangkit->mesin_jenis_turbin}}" placeholder="Jenis Turbin (Air/Diesel/Uap/dst.)" name="mesin_jenis_turbin" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Merek Pembuat</label>
                                            <input required  type="text"  value="{{$laporan->pembangkit->mesin_merk_pembuat}}" placeholder="Merek Pembuat Mesin" name="mesin_merk_pembuat" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Negara Pembuat</label>
                                            <input required  type="text" name="mesin_negara_pembuat"  value="{{$laporan->pembangkit->mesin_negara_pembuat}}" placeholder="Negara Pembuat" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Tahun Pembuatan</label>
                                            <input required  type="text" name="mesin_tahun_pembuatan"  value="{{$laporan->pembangkit->mesin_tahun_pembuatan}}" placeholder="Tahun Pembuatan Mesin" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Tipe / Seri Mesin</label>
                                            <input required  type="text" name="mesin_tipe_seri_mesin"  value="{{$laporan->pembangkit->mesin_tipe_seri_mesin}}" placeholder="Tipe / Seri Mesin" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Kapasitas</label>
                                            <input required  type="text" name="mesin_kapasitas" value="{{$laporan->pembangkit->mesin_kapasitas}}"  placeholder="Kapasitas Mesin" class="form-control" id="grantpo">
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
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$laporan->id}}Four"><span class="glyphicon glyphicon-th-list">
                                </span>C. Generator</a>
                            </h4>
                        </div>
                        <div id="collapse{{$laporan->id}}Four" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="well well-sm well-primary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="grantpo">Merk Pembuat</label>
                                            <input required  type="text" placeholder="Merek Pembuat"  value="{{$laporan->pembangkit->mesin_merk_pembuat}}" name="generator_merk_pembuat" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Negara Pembuat</label>
                                            <input required  type="text" name="generator_negara_pembuat"  value="{{$laporan->pembangkit->generator_negara_pembuat}}" placeholder="Negara Pembuat" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Tahun Pembuatan</label>
                                            <input required  type="text" name="generator_tahun_pembuatan"  value="{{$laporan->pembangkit->generator_tahun_pembuatan}}"  placeholder="Tahun Pembuatan Mesin" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Tipe / Seri Mesin</label>
                                            <input required  type="text" name="generator_tipe_seri_mesin"  value="{{$laporan->pembangkit->generator_tipe_seri_mesin}}" placeholder="Tipe / Seri Mesin" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Kapasitas</label>
                                            <input required  type="text" name="generator_kapasitas"  value="{{$laporan->pembangkit->generator_kapasitas}}" placeholder="Kapasitas Mesin" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Fasa</label>
                                            <input required  type="text" name="generator_fasa"  value="{{$laporan->pembangkit->generator_fasa}}" placeholder="Fasa" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Frekuensi</label>
                                            <input required  type="text" name="generator_frekuensi"  value="{{$laporan->pembangkit->generator_frekuensi}}"  placeholder="Frekuensi" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Tegangan</label>
                                            <input required  type="text" name="generator_tegangan"  value="{{$laporan->pembangkit->generator_tegangan}}" placeholder="Tegangan" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Arus</label>
                                            <input required  type="text" name="generator_arus"  value="{{$laporan->pembangkit->generator_arus}}" placeholder="Arus" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Power Factor</label>
                                            <input required  type="text" name="generator_power_factor"  value="{{$laporan->pembangkit->generator_power_factor}}" placeholder="Power Factor" class="form-control" id="grantpo">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Daya</label>
                                            <input required  type="text" name="generator_daya" placeholder="Daya"  value="{{$laporan->pembangkit->generator_daya}}" class="form-control" id="grantpo">
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
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$laporan->id}}Five"><span class="glyphicon glyphicon-th-list">
                                </span>D. Laporan</a>
                            </h4>
                        </div>
                        <div id="collapse{{$laporan->id}}Five" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="well well-sm well-primary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="grantpo">Bahan Bakar Yang Digunakan</label>
                                            <input required type="text" placeholder="Bahan Bakar Yang Digunakan" name="jenis_bahan_bakar" class="form-control" id="grantpo" value="{{$laporan->jenis_bahan_bakar}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Jumlah Konsumsi Bahan Bakar (L atau Ton atau L/det)</label>
                                            <input required type="text" name="konsumsi_bahan_bakar" placeholder="Jumlah Konsumsi Bahan Bakar" class="form-control" id="grantpo" value="{{$laporan->konsumsi_bahan_bakar}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Pelumas Yang Digunakan</label>
                                            <input required type="text" name="jenis_pelumas" placeholder="Jenis Pelumas Yang Digunakan" class="form-control" id="grantpo" value="{{$laporan->jenis_pelumas}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Jumlah Konsumsi Pelumas (L)</label>
                                            <input required type="text" name="konsumsi_pelumas" placeholder="Jumlah Konsumsi Pelumas" class="form-control" id="grantpo" value="{{$laporan->konsumsi_pelumas}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Penoperasian Mesin (jam)</label>
                                            <input required type="text" name="waktu_operasi_mesin" placeholder="Waktu Operasi Mesin" class="form-control" id="grantpo" value="{{$laporan->waktu_operasi_mesin}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Produksi Listrik (kWh)</label>
                                            <input required type="text" name="produksi_listrik" placeholder="Produksi Listrik" class="form-control" id="grantpo" value="{{$laporan->produksi_listrik}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Jumlah Kerusakan</label>
                                            <input required type="text" name="jumlah_kerusakan" placeholder="Jumlah Kerusakan" class="form-control" id="grantpo" value="{{$laporan->jumlah_kerusakan}}">
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
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$laporan->id}}Six"><span class="glyphicon glyphicon-th-list">
                                </span>E. Sambungan Listrik Dari Dan Kepada Pihak Lain</a>
                            </h4>
                        </div>
                        <div id="collapse{{$laporan->id}}Six" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="well well-sm well-primary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="grantpo">Badan Usaha</label>
                                            <input required type="text" name="sambungan_badan_usaha" placeholder="Badan Usaha" class="form-control" id="grantpo" value="{{$laporan->sambungan_badan_usaha}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Input & Output (kva)</label>
                                            <input required type="text" name="sambungan_in_out" placeholder="Input & Output (kva)" class="form-control" id="grantpo" value="{{$laporan->sambungan_in_out}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Rata-rata Daya  (kWh / Bulan)</label>
                                            <input required type="text" name="sambungan_rata_rata" placeholder="Rata-rata Daya  (kWh / Bulan)" class="form-control" id="grantpo" value="{{$laporan->sambungan_rata_rata}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="grantpo">Cara Transmisi / Distribusi</label>
                                            <input required type="text" name="sambungan_cara_distribusi" placeholder="Cara Transmisi / Distribusi" class="form-control" id="grantpo" value="{{$laporan->sambungan_cara_distribusi}}">
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

			<div class="col-sm-5">

				<dl>

                    <dt>Keterangan:</dt>
                        <dd>
                            <sup><b>1</b></sup> Jumlah selama 6 (enam) bulan terakhir untuk IO atau 12 (duabelas) bulan terakhir untuk SKT atau laporan
                        </dd>
                        <dt></dt>
                        <dt></dt>
                        <dd>
                            <sup><b>2</b></sup> Satuan BBM cair (solar/bensin) adalah Liter; Batubara adalah Ton atau MTon; Tenaga Air adalah Liter/detik;dst.
                        </dd>
                        <dt></dt>
                        <dt></dt>
                        <dd>
                            <sup><b>3</b></sup> Perhitungan dengan menguunakan rumus daya x waktu operasi.
                        </dd>
                        <dt></dt>
                        <dt></dt>
                        <dd>
                            <sup><b>4</b></sup> Jumlah selama 6 (enam) bulan terakhir untuk IO atau 12 (duabelas) bulan terakhir untuk SKT atau laporan
                        </dd>
				</dl>

			</div>

		</div>

	</div>
<center>

	<input type="submit" name="submit" class="btn btn-info" style="margin-right: 300px">
</center>
</section>
</form>

<?php
    }
?>
	<!-- Footer Widgets -->
<section class="footer-widgets">

	<div class="container">

		<div class="row">

			<div class="col-sm-6">

				<a href="#">
					<img src="<?php echo url('/assets/')?>/images/logo@2x.png" width="100" />
				</a>

				<p>
					Electrical One Stop Monitoring System. <br />
					Dinas Energi dan Sumber Daya Mineral Provinsi Jawa Barat.
				</p>

			</div>

			<div class="col-sm-3">

				<h5>Address</h5>

				<p>
					Bandung. <br />
					Jl. Soekarno Hatta no 576 <br />
					Jawa Barat, Indonesia
				</p>

			</div>

			<div class="col-sm-3">

				<h5>Contact</h5>

				<p>
					Phone: +62 (22) 7000000 <br />
					Fax: +62 (22) 7000000 <br />
					admin.esdm@jabarprov.go.id
				</p>

			</div>

		</div>

	</div>

</section>

<!-- Site Footer -->
<footer class="site-footer">

	<div class="container">

		<div class="row">

			<div class="col-sm-6">
				Copyright &copy; E-osmosys - Electrical One Stop Monitoring System.
			</div>

			<div class="col-sm-6">

				<ul class="social-networks text-right">
					<li>
						<a href="#">
							<i class="entypo-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-facebook"></i>
						</a>
					</li>
				</ul>

			</div>

		</div>

	</div>

</footer>
</div>


	<!-- Bottom scripts (common) -->
	<script src="<?php echo url('/assets/')?>/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo url('/assets/')?>/js/bootstrap.js"></script>
	<script src="<?php echo url('/assets/')?>/js/joinable.js"></script>
	<script src="<?php echo url('/assets/')?>/js/resizeable.js"></script>
	<script src="<?php echo url('/assets/')?>/js/jquery.cycle2.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo url('/assets/')?>/js/neon-custom.js"></script>
	<script type="text/javascript">
	$(".btn-add-panel").on("click", function () {
		var hash = $(".template").length;
		$('.abc').removeClass("in");
		var appends =
        '<div class="panel panel-default template"> <div class="panel-heading"> <a class="glyphicon glyphicon-remove-circle pull-right " style="margin-right:50px;">Hapus</a> <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionz" href="#collapse'+(++hash)+'"> Operator #'+hash+'</a> </h4> </div> <div id="collapse'+hash+'" class="panel-collapse collapse in"> <div class="panel-body"> <div class="form-group "> <label>Nama Operator</label> <div class="form-group form-float"> <input class="form-control show-tick" name="nama[]" required  placeholder="Nama Operator"> </div> </div> <div class="form-group "> <label>Penerbit</label> <div class="form-group form-float"> <input class="form-control show-tick" name="penerbit[]" required  placeholder="Penerbit Operator"> </div> </div> <div class="form-group "> <label>Nomor</label> <div class="form-group form-float"> <input class="form-control show-tick" name="nomor[]" required  placeholder="Nomor"> </div> </div> <div class="form-group "> <label>Tanggal</label> <div class="form-group form-float"> <input class="form-control show-tick" name="tanggal[]" required  placeholder="Tanggal" type="date"> </div> </div> <div class="form-group "> <label>Bidang</label> <div class="form-group form-float"> <input class="form-control show-tick" name="bidang[]" required  placeholder="Bidang"> </div> </div> <div class="form-group "> <label>Level</label> <div class="form-group form-float"> <input class="form-control show-tick" name="level[]" required  placeholder="Level"> </div> </div> <div class="form-group "> <label>Keterangan</label> <div class="form-group form-float"> <input class="form-control show-tick" name="ket[]" required  placeholder="Keterangan"> </div> </div>';
		$(appends).appendTo("#accordionz").hide().fadeIn(900);
		 $('#collapse'+hash).addClass('in');

	});

	$(document).on('click', '.glyphicon-remove-circle', function () {
		$(this).parents('.panel').get(0).remove();
	});

	</script>

</body>
</html>
