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

					<a href="{{url('/')}}">
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
</body>
</html>
