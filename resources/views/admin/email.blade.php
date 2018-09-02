<center>
	<table width="500px" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px">
		<tbody><tr>
			<td align="left" style="background-color:#00a65a;padding:25px" width="20%">
				<span><font color="#888888"></font></span>
			</td>
			<td align="left" style="background-color:#00a65a;padding:25px">
				<h3 style="color:#fff"><span>REMINDER <?php echo $perusahaan ?></span></h3>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="left" style="background-color:#fff;padding:20px 20px 0px 20px">
				<span style="font-size:16px">
                    <center><b>PERINGATAN <?php echo $peringatan ?> </b> </center>
                    <br>
                    <br>
                    No. Sertifikat : {{$pembangkit['no_sertifikat']}} <br>
                    No. Registrasi : {{$pembangkit['no_registrasi']}} <br>
                    SEGERA ISI LAPORAN DENGAN MENGKLIK TAUTAN BERIKUT <br>
                    <center><a href="<?php echo url('/Laporan/input/'.$laporan['token']) ?>">Isi Laporan</a></center>
                </span>
			</td>
		</tr>

		<tr>
			<td colspan="2" align="right" style="padding-top:0px;padding-bottom:4px;padding-right:20px;font-size:13px;background-color:#fff;color:#777"><span class="il"><br><br>E-OSMOSYS ESDM</span> @ 2017</td>
		</tr>
	</tbody></table>
</center>
