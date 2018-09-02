<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="<?php echo url('assets/')?>/images/favicon.ico">

	<title>E-OSMOSYS | Input Success</title>

	<link rel="stylesheet" href="<?php echo url('assets/')?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo url('assets/')?>/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="<?php echo url('assets/')?>/css/neon.css">

	<script src="<?php echo url('assets/')?>/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="<?php echo url('assets/')?>/js/ie8-responsive-file-warning.js"></script><![endif]-->

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

					<a href="index.html">
						<img src="<?php echo url('assets/')?>/images/logo@2x.png" width="120" />
					</a>

				</section>


			</header>

		</div>

	</div>

</div>
	<!-- Breadcrumb -->
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
$rbulan = array(
  'Januari' => '1',
  'Februari' => '2',
  'Maret' => '3',
  'April' => '4',
  'Mei' => '5',
  'Juni' => '6',
  'July' => '7',
  'Agustus' => '8',
  'September' => '9',
  'Oktober' => '10',
  'November' => '11',
  'Desember' => '12',
   );
?>
<section class="portfolio-item-details">

	<div class="container">

			<center><h1><strong>Data telah tersimpan <br> Terimakasih atas kerjasamanya <br><br><?php echo $laporan->pembangkit->company->nama ?></strong></h1></center>
            <br>


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
	<script src="<?php echo url('assets/')?>/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo url('assets/')?>/js/bootstrap.js"></script>
	<script src="<?php echo url('assets/')?>/js/joinable.js"></script>
	<script src="<?php echo url('assets/')?>/js/resizeable.js"></script>
	<script src="<?php echo url('assets/')?>/js/jquery.cycle2.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo url('assets/')?>/js/neon-custom.js"></script>
	<script type="text/javascript">
		var hash = 1;
	$(".btn-add-panel").on("click", function () {
		$('.abc').removeClass("in");
		var appends = '<div class="panel panel-default template"> <div class="panel-heading"> <a class="glyphicon glyphicon-remove-circle pull-right ">x</a> <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionz" href="#collapse'+(++hash)+'"> Operator #'+hash+'</a> </h4> </div> <div id="collapse'+hash+'" class="panel-collapse collapse in"> <div class="panel-body"> <div class="form-group "> <label>Nama Operator</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_nama[]" placeholder="Nama Operator"> </div> </div> <div class="form-group "> <label>Penerbit</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_penerbit[]" placeholder="Penerbit Operator"> </div> </div> <div class="form-group "> <label>Nomor</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_nomor[]" placeholder="Nomor"> </div> </div> <div class="form-group "> <label>Tanggal</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_tanggal[]" placeholder="Tanggal" type="date"> </div> </div> <div class="form-group "> <label>Bidang</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_bidang[]" placeholder="Bidang"> </div> </div> <div class="form-group "> <label>Level</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_level[]" placeholder="Level"> </div> </div> <div class="form-group "> <label>Keterangan</label> <div class="form-group form-float"> <input class="form-control show-tick" name="operator_ket[]" placeholder="Keterangan"> </div> </div>';
		$(appends).appendTo("#accordionz").hide().fadeIn(900);
		 $('#collapse'+hash).addClass('in');

	});

	$(document).on('click', '.glyphicon-remove-circle', function () {
		$(this).parents('.panel').get(0).remove();
	});

	</script>

</body>
</html>
