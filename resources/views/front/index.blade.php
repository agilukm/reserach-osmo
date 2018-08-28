<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="E-Osmosys" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ url('/') }}/assets/favicon.png">

	<title>E-Osmosys</title>

	<link rel="stylesheet" href="{{ url('/') }}/assets/depan/css/bootstrap.css">
	<link rel="stylesheet" href="{{ url('/') }}/assets/depan/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="{{ url('/') }}/assets/depan/css/neon.css">

	<script src="{{ url('/') }}/assets/depan/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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
								<img src="{{ url('/') }}/assets/depan/images/logo@2x.png" width="120" />
							</a>

						</section>

						<nav class="site-nav">

							<ul class="main-menu hidden-xs" id="main-menu">
								<li class="active">
									<a href="{{ url('/') }}">
										<span>Home</span>
									</a>
								</li>
								<li>
									<a href="{{ url('/') }}/login/">
										<span>Login</span>
									</a>
								</li>
								<!--
								<ul>
								<li>
								<a href="about.html">
								<span>About Us</span>
							</a>
						</li>
						<li class="active">
						<a href="#">
						<span>Active Menu Item</span>
					</a>
				</li>
				<li>
				<a href="gallery.html">
				<span>Gallery</span>
			</a>

			<ul>
			<li>
			<a href="index.html?2">
			<span>Sub 1</span>
		</a>
	</li>
	<li>
	<a href="about.html">
	<span>Sub 2</span>
</a>

<ul>
<li>
<a href="contact.html">
<span>Sub of sub 1</span>
</a>
</li>
<li>
<a href="portfolio.html">
<span>Sub of sub 2</span>
</a>
</li>
</ul>
</li>
<li>
<a href="#">
<span>Sub 3</span>
</a>
</li>
</ul>
</li>
<li>
<a href="blog-post.html">
<span>Blog Post</span>
</a>
</li>
<li>
<a href="portfolio-single.html">
<span>Portfolio Item</span>
</a>
</li>
</ul>
</li>
<li>
<a href="portfolio.html">
<span>Portfolio</span>
</a>
</li>
<li>
<a href="blog.html">
<span>Blog</span>
</a>
</li>
<li>
<a href="contact.html">
<span>Contact</span>
</a>
</li>
<li class="search">
<a href="#">
<i class="entypo-search"></i>
</a>

<form method="get" class="search-form" action="" enctype="application/x-www-form-urlencoded">
<input type="text" class="form-control" name="q" placeholder="Type to search..." />
</form>
</li> -->
</ul>


<div class="visible-xs">

	<a href="#" class="menu-trigger">
		<i class="entypo-menu"></i>
	</a>

</div>
</nav>

</header>

</div>

</div>

</div>
<!-- Main Slider -->

<section class="slider-container" style="  background-image: url({{ url('/') }}/assets/depan/slide-img-2.png ?>);">
	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="slides">

					<!-- Slide 1 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>E-Osmosys Dashboard</small>
								REALTIME
							</h2>

							<p>
								Pemantauan secara realtime sesuai data yang masuk hasil dari data perizinan ketenagalistrikan yang masuk.
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="{{ url('/') }}/assets/depan/images/slide1.png" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slide 2 -->
					<div class="slide" data-bg="{{ url('/') }}/assets/depan/images/slide-img-2.png">

						<div class="slide-image">

							<a href="#">
								<img src="{{ url('/') }}/assets/depan/images/slide2.png" class="img-responsive" />
							</a>
						</div>

						<div class="slide-content text-right">
							<h2>
								<small>E-Osmosys Details</small>
								AKURAT
							</h2>

							<p>
								Melihat spesifikasi teknis antara <br />
								data penerbitan perizinan dengan <br />
								Sertifikat Laik Operasi.
							</p>

						</div>

					</div>

					<!-- Slide 3 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>E-Osmosys Peringatan</small>
								TEGAS
							</h2>

							<p>
								Memberikan peringatan terhadap pemilik instalasi ketenagalistrikan<br />
								Yang tidak memberikan laporan ketenagalistrikan sesuai dengan peraturan yang berlaku
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="{{ url('/') }}/assets/depan/images/slide3.png" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slider navigation -->
					<div class="slides-nextprev-nav">
						<a href="#" class="prev">
							<i class="entypo-left-open-mini"></i>
						</a>
						<a href="#" class="next">
							<i class="entypo-right-open-mini"></i>
						</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>
<!-- Features Blocks -->
<section class="features-blocks">

	<div class="container">

		<div class="row vspace"><!-- "vspace" class is added to distinct this row -->

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-cog"></i>
						Electrical
					</h3>

					<p>
						Praktisi salah satu cabang ilmu rekayasa yang berhubungan dengan teknologi ketenagalistrikan
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-gauge"></i>
						One Stop
					</h3>

					<p>
						Beroperasi 24 - Jam untuk memantau ketertiban para pengguna teknologi ketenagalistrikan
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-lifebuoy"></i>
						Monitoring
					</h3>

					<p>
						Melakukan pengawasan informasi dari suatu kebijakan yang sedang berjalan.
					</p>
				</div>

			</div>

		</div>

		<!-- Separator -->
		<div class="row">
			<div class="col-md-12">
				<hr />
			</div>
		</div>

	</div>

</section>
<!-- Portfolio -->
<section class="portfolio-widget">

	<div class="container">

		<div class="row">

			<div class="col-sm-3">

				<div class="portfolio-info">
					<h3>
						<a href="#">LINK TERKAIT</a>
					</h3>

					<p>Berikut adalah aplikasi yang terhubung dengan Electrical One Stop Monitoring System</p>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="http://esdm.jabarprov.go.id/esdmslo" target="_blank" class="image">
						<img src="{{ url('/') }}/assets/depan/images/thumb1.png" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="http://esdm.jabarprov.go.id/esdmslo" target="_blank" class="like">
							<i class="entypo-heart"></i>
						</a>

						<a href="http://esdm.jabarprov.go.id/esdmslo" target="_blank" class="name">SLO</a>
					</h4>

					<div class="categories">
						<a href="http://esdm.jabarprov.go.id/esdmslo">Sertifikasi Laik Operasi</a>
					</div>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="http://dpmptsp.jabarprov.go.id/sicantik/backoffice/login"  target="_blank" class="image">
						<img src="{{ url('/') }}/assets/depan/images/thumb2.png" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="portfolio-single.html" target="_blank" class="like liked">
							<i class="entypo-heart"></i>
						</a>

						<a href="http://dpmptsp.jabarprov.go.id/sicantik/" target="_blank" class="name">SIMPATIK</a>
					</h4>

					<div class="categories">
						<a href="http://dpmptsp.jabarprov.go.id/sicantik/" target="_blank">Sistem Pelayanan Terpadu Satu Pintu</a>
					</div>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="{{ url('/login') }}" class="image">
						<img src="{{ url('/') }}/assets/depan/images/thumb3.png" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="portfolio-single.html" class="like">
							<i class="entypo-heart"></i>
						</a>

						<a href="portfolio-single.html" class="name">E-OSMOSYS</a>
					</h4>

					<div class="categories">
						<a href="portfolio-single.html">Electrical - One Stop Monitoring System</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>
<!-- Call for Action Button -->
<!-- <div class="container">
<div class="row vspace">
<div class="col-md-12">

<div class="callout-action">
<h2>Get your copy of Neon now</h2>

<div class="callout-button">
<a href="index.html" class="btn btn-secondary">Purchase</a>
</div>
</div>

</div>
</div>
</div> -->
<!-- Testimonails -->
<section class="testimonials-container">

	<div class="container">

		<div class="col-md-12">

			<div class="testimonials carousel slide" data-interval="8000">

				<div class="carousel-inner">

					<div class="item active">

						<blockquote>
							<p>
								Optimalisasi Pengawasan & Pengendalian Ketenagalistrikan Melalui Pengembangan
								<br />
								<i>"Electrical One Stop Monitoring System"</i> (E-OSMOSYS)

							</p>
							<small>
								<cite>Ai Saadiyah Dwidaningsih, S.T., M.T. </cite> - Project Leader
							</small>
						</blockquote>

					</div>




				</div>

			</div>

		</div>

	</div>

</section>


<!-- Client Logos -->
<!-- <section class="clients-logos-container">

<div class="container">

<div class="row">

<div class="client-logos carousel slide" data-ride="carousel" data-interval="5000">

<div class="carousel-inner">

<div class="item active">

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

</div>

<div class="item">

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

<a href="#">
<img src="assets/images/client-logo-1.png" />
</a>

</div>

</div>

</div>

</div>

</div>

</section>	 -->
<!-- Footer Widgets -->
<section class="footer-widgets">

	<div class="container">

		<div class="row">

			<div class="col-sm-6">

				<a href="#">
					<img src="{{ url('/') }}/assets/depan/images/logo@2x.png" width="100" />
				</a>

				<p>
					Electrical One Stop Monitoring System. <br />
				</p>

			</div>

			<div class="col-sm-3">

				<h5>Address</h5>

				<p>
					Bandung. <br />
					Jl. Soekarno Hatta No 576 <br />
					Jawa Barat, Indonesia
				</p>

			</div>

			<div class="col-sm-3">

				<h5>Contact</h5>

				<p>
					Phone: +62 (22) 7500000 <br />
					Fax: +62 (22) 7500000 <br />
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
				Copyright &copy; E-OSMOSYS - DINAS ENERGI DAN SUMBER DAYA MINERAL.
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
<script src="assets/js/gsap/TweenMax.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/joinable.js"></script>
<script src="assets/js/resizeable.js"></script>
<script src="assets/js/neon-slider.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="assets/js/neon-custom.js"></script>

</body>
</html>
