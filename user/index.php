<?php
	include('../config/config.php');
	if(isset($_COOKIE['uid'])){
		$data = query('SELECT * from user WHERE id= :id',array(':id'=>$_COOKIE['uid']))[0];
		if($data['jenis_kelamin']=='P'){
			$data['jenis_kelamin'] = "Perempuan";
		}else{
			$data['jenis_kelamin']= "Laki - laki";
		}
	}
	//else{
	//	redirect('../index.php');
	//}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<?php bootstrap(); ?>
	<title>Square Profile with Flat Responsive widget Design :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Square Profile Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!--webfonts-->

	<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<!--//webfonts-->

</head>

<body id="table">

	<!-- main -->

	<div class="center-container">

		<div class="w3ls_banner_info">


			<h1>Square Profile </h1>
			<div class="profile">
				<div class="wrap">
					<div class="profile-main">
						<div class="profile-pic wthree">
							<img src="img.php?id=<?php echo $_COOKIE['uid']?>" alt="Foto Profil">
							<h3><?php echo $data['nama'];?></h3>
							<div class="w3ls-agile-left">
								<!---728x90--->

								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>ID pendafataran </b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $data['id'];?></span></li>
										</ul>
									</li>

									<li>
										<ul class="address-text">
											<li><b>password </b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $data['password']?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Jenis Kelamin </b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $data['jenis_kelamin']?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Phone </b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $data['nomer_hp']?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>ADDRESS </b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $data['alamat']?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>E-MAIL </b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $data['email']?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
										<li><b>tanggal bermain </b></li>
										<li>: </li>
										<li><span class="w3"><?php echo $data['time']?></span></li>
										</ul>
									</li>
									<li>
									<ul class="address-text">
										<li><b>keterangan </b></li>
										<li>: </li>
										<li><span class="w3"><?php echo $data['keterangan']?></span></li>
									</ul>
									</li>

								</ul>
							</div>
						</div>
						<div class="clear"> </div>
						<div class="profile-follows">
							<div class="row">
								<?php
								if(isset($_COOKIE['uid'])){
								?>
									<a href="../index.php" class="btn btn-primary">Batal</a>
									<a href="#">print</a>
									<div class="btn-info">
									<input type="submit" name="print" value="Print File" onclick="PrintDoc()">
									</div>
								<?php
								}
								?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--footer-->
			<div class="footer-w3">
				<p>&copy; 2018 Square Profile Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
			<!--//footer-->

		</div>
	</div>
	<!-- //main -->

	<script src="js/jquery.min.v3.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script>
		$('.demo-1').percentcircle();

		$('.demo-2').percentcircle({
			animate: false,
			diameter: 100,
			guage: 3,
			coverBg: '#000',
			bgColor: '#ff0000',
			fillColor: '#000',
			percentSize: '50px',
			percentWeight: 'normal'
		});


	</script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	 <script type="text/javascript">
    /*--This JavaScript method for Print command--*/
        function PrintDoc() {
            var toPrint = document.getElementById('table');
            var popupWin = window.open('');
            popupWin.document.open();
            popupWin.document.write('<html><title>::Print File::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
            popupWin.document.write(toPrint.outerHTML);
            popupWin.document.write('</html>');
            popupWin.document.close();
        }
        /*--This JavaScript method for Print Preview command--*/
        function PrintPreview() {
            var toPrint = document.getElementById('table');
            var popupWin = window.open('');
            popupWin.document.open();
            popupWin.document.write('<html><title>::Print Preview File::</title><link rel="stylesheet" type="text/css" href="print.css" media="screen"/></head><body">')
            popupWin.document.write(toPrint.outerHTML);
            popupWin.document.write('</html>');
            popupWin.document.close();
        }
    </script>

</body>

</html>