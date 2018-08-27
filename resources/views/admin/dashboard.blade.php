@extends('admin.layout')

@section('content')



		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Sample Toastr Notification
			setTimeout(function()
			{
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};

				toastr.success("Selamat datang di Electrical One Stop Monitoring System. Enjoy it!", "Dinas ESDM Provinsi Jawa Barat", opts);
			}, 3000);


			// Sparkline Charts
			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
			$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
			$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
			$('.linechart').sparkline();
			$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
			$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );


			$(".monthly-sales").sparkline([0,0,9,0,0,0,0,0,0,0,0], {
				type: 'bar',
				barColor: '#485671',
				height: '80px',
				barWidth: 10,
				barSpacing: 2
			});


			// JVector Maps
			var map = $("#map");

			map.vectorMap({
				map: 'europe_merc_en',
				zoomMin: '3',
				backgroundColor: '#383f47',
				focusOn: { x: 0.5, y: 0.8, scale: 3 }
			});



			// Line Charts
			var line_chart_demo = $("#line-chart-demo");

			var line_chart = Morris.Line({
				element: 'line-chart-demo',
				data: [
					{ y: '2011', a: 0, b: 0 },
					{ y: '2012', a: 0,  b: 0 },
					{ y: '2013', a: 0,  b: 0 },
					{ y: '2014', a: 0,  b: 0 },
					{ y: '2015', a: 0,  b: 0 },
					{ y: '2016', a: 0,  b: 0 },
					{ y: '2017', a: 9, b: 1 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Izin Terbit', 'Laporan Berkala'],
				redraw: true
			});

			line_chart_demo.parent().attr('style', '');


			// Donut Chart
			var donut_chart_demo = $("#donut-chart-demo");

			donut_chart_demo.parent().show();

			var donut_chart = Morris.Donut({
				element: 'donut-chart-demo',
				data: [
					{label: "Download Sales", value: getRandomInt(10,50)},
					{label: "In-Store Sales", value: getRandomInt(10,50)},
					{label: "Mail-Order Sales", value: getRandomInt(10,50)}
				],
				colors: ['#707f9b', '#455064', '#242d3c']
			});

			donut_chart_demo.parent().attr('style', '');


			// Area Chart
			var area_chart_demo = $("#area-chart-demo");

			area_chart_demo.parent().show();

			var area_chart = Morris.Area({
				element: 'area-chart-demo',
				data: [
					{ y: '2011', a: 0, b: 0 },
					{ y: '2012', a: 0,  b: 0 },
					{ y: '2013', a: 0,  b: 0 },
					{ y: '2014', a: 0,  b: 0 },
					{ y: '2015', a: 0,  b: 0 },
					{ y: '2016', a: 0,  b: 0 },
					{ y: '2017', a: 9, b: 9 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B'],
				lineColors: ['#303641', '#576277']
			});

			area_chart_demo.parent().attr('style', '');




			// Rickshaw
			var seriesData = [ [], [] ];

			var random = new Rickshaw.Fixtures.RandomData(50);

			for (var i = 0; i < 50; i++)
			{
				random.addData(seriesData);
			}

			var graph = new Rickshaw.Graph( {
				element: document.getElementById("rickshaw-chart-demo"),
				height: 193,
				renderer: 'area',
				stroke: false,
				preserve: true,
				series: [{
						color: '#73c8ff',
						data: seriesData[0],
						name: 'Upload'
					}, {
						color: '#e0f2ff',
						data: seriesData[1],
						name: 'Download'
					}
				]
			} );

			graph.render();

			var hoverDetail = new Rickshaw.Graph.HoverDetail( {
				graph: graph,
				xFormatter: function(x) {
					return new Date(x * 1000).toString();
				}
			} );

			var legend = new Rickshaw.Graph.Legend( {
				graph: graph,
				element: document.getElementById('rickshaw-legend')
			} );

			var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
				graph: graph,
				legend: legend
			} );

			setInterval( function() {
				random.removeData(seriesData);
				random.addData(seriesData);
				graph.update();

			}, 500 );
		});


		function getRandomInt(min, max)
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>


		<div class="row">
			<div class="col-sm-3 col-xs-6">

				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="81" data-postfix="" data-duration="1500" data-delay="0">0</div>

					<h3>SLO Terbit</h3>
					<p>Sertifikasi Laik Operasi yang diterbitkan oleh Dinas.</p>
				</div>

			</div>

			<div class="col-sm-3 col-xs-6">

				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="537" data-postfix="" data-duration="1500" data-delay="600">0</div>

					<h3>Registrasi SLO</h3>
					<p>SLO yang diterbitkan oleh LIT Akreditasi.</p>
				</div>

			</div>

			<div class="clear visible-xs"></div>

			<div class="col-sm-3 col-xs-6">

				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="7" data-postfix="" data-duration="1500" data-delay="1200">0</div>

					<h3>Izin Terbit</h3>
					<p>Izin yang diterbitkan oleh DPMPTSP.</p>
				</div>

			</div>

			<div class="col-sm-3 col-xs-6">

				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-start="0" data-end="1" data-postfix="" data-duration="1500" data-delay="1800">0</div>

					<h3>Laporan Berkala</h3>
					<p>Laporan yang sudah dimasukan oleh perusahaan</p>
				</div>

			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-sm-8">

				<div class="panel panel-primary" id="charts_env">

					<div class="panel-heading">
						<div class="panel-title">Real Time Graphic</div>

						<div class="panel-options">
							<ul class="nav nav-tabs">
								<!-- <li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li> -->
								<li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li>
								<!-- <li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li> -->
							</ul>
						</div>
					</div>

					<div class="panel-body">

						<div class="tab-content">

							<div class="tab-pane" id="area-chart" style="">
								<div id="area-chart-demo" class="morrischart" style="height: 300px; position: relative;"><div class="morris-hover morris-default-style" style="left: 934px; top: 57px;"><div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #303641">
								  Series A:
								  100
								</div><div class="morris-hover-point" style="color: #576277">
								  Series B:
								  90
								</div></div></div>
							</div>

							<div class="tab-pane active" id="line-chart" style="">
								<div id="line-chart-demo" class="morrischart" style="height: 300px; position: relative;"><div class="morris-hover morris-default-style" style="left: 773.345px; top: 93px;"><div class="morris-hover-row-label">2017</div><div class="morris-hover-point" style="color: #0b62a4">
								  Izin Terbit:
								  9
								</div><div class="morris-hover-point" style="color: #7A92A3">
								  Laporan Berkala:
								  1
								</div></div></div>
							</div>

							<div class="tab-pane" id="pie-chart" style="">
								<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
							</div>

						</div>

					</div>

					<table class="table table-bordered table-responsive">

						<thead>
							<tr>
								<th width="50%" class="col-padding-1">
									<div class="pull-left">
										<div class="h4 no-margin">Izin Terbit</div>
										<small>9</small>
									</div>
									<span class="pull-right pageviews"><canvas width="34" height="30" style="display: inline-block; width: 34px; height: 30px; vertical-align: top;"></canvas></span>

								</th>
								<th width="50%" class="col-padding-1">
									<div class="pull-left">
										<div class="h4 no-margin">Laporan</div>
										<small>1</small>
									</div>
									<span class="pull-right uniquevisitors"><canvas width="34" height="30" style="display: inline-block; width: 34px; height: 30px; vertical-align: top;"></canvas></span>
								</th>
							</tr>
						</thead>

					</table>

				</div>

			</div>

			<div class="col-sm-4">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">
							<h4>
								Konektifitas Server
								<br>
								<small>current server uptime</small>
							</h4>
						</div>

						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>

					<div class="panel-body no-padding">
						<div id="rickshaw-chart-demo" class="rickshaw_graph">
							<div id="rickshaw-legend" class="rickshaw_legend"><ul><li class="line"><div class="swatch" style="background-color: rgb(224, 242, 255);"></div><span class="label">Download</span></li><li class="line"><div class="swatch" style="background-color: rgb(115, 200, 255);"></div><span class="label">Upload</span></li></ul></div>
						<div class="detail"></div></div>
					</div>
				</div>

			</div>
		</div>


		<br>

		<div class="row">

			<div class="col-sm-4">

				<div class="panel panel-primary">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th class="padding-bottom-none text-center">
									<br>
									<br>
									<span class="monthly-sales"><canvas width="262" height="80" style="display: inline-block; width: 262px; height: 80px; vertical-align: top;"></canvas></span>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="panel-heading">
									<h4>Pertumbuhan perbulan</h4>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>

			<div class="col-sm-8">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Rekap Izin Per Kabupaten / Kota</div>

						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>

					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Wilayah</th>
								<th>Jumlah</th>
								<!-- <th>Activity</th> -->
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1</td>
								<td>Kab Sukabumi</td>
								<td>4</td>
								<!-- <td class="text-center"><span class="inlinebar"><canvas width="29" height="14" style="display: inline-block; width: 29px; height: 14px; vertical-align: top;"></canvas></span></td> -->
							</tr>

							<tr>
								<td>2</td>
								<td>Kota Bandung</td>
								<td>2</td>
								<!-- <td class="text-center"><span class="inlinebar-2"><canvas width="29" height="14" style="display: inline-block; width: 29px; height: 14px; vertical-align: top;"></canvas></span></td> -->
							</tr>

							<tr>
								<td>3</td>
								<td>Kota Cirebon</td>
								<td>2</td>
								<!-- <td class="text-center"><span class="inlinebar-3"><canvas width="29" height="14" style="display: inline-block; width: 29px; height: 14px; vertical-align: top;"></canvas></span></td> -->
							</tr>
							<tr>
								<td>4</td>
								<td>Kab Bekasi</td>
								<td>1</td>
								<!-- <td class="text-center"><span class="inlinebar-3"><canvas width="29" height="14" style="display: inline-block; width: 29px; height: 14px; vertical-align: top;"></canvas></span></td> -->
							</tr>

						</tbody>
					</table>
				</div>

			</div>


		</div>
		</div>

		<br>


		<script type="text/javascript">
			// Code used to add Todo Tasks
			jQuery(document).ready(function($)
			{
				var $todo_tasks = $("#todo_tasks");

				$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
				{
					if(ev.keyCode == 13)
					{
						ev.preventDefault();

						if($.trim($(this).val()).length)
						{
							var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
							$(this).val('');

							$todo_entry.appendTo($todo_tasks.find('.todo-list'));
							$todo_entry.hide().slideDown('fast');
							replaceCheckboxes();
						}
					}
				});
			});
		</script>
	</div>
		

@endsection
@section('plugin')
@endsection
