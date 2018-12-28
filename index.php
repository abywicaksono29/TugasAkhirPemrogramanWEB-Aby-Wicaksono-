<?php
include("config/config.php");
if(isset($_POST['iyaditekan'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $time = $_POST['time'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];
    $foto = file_get_contents($_FILES['foto']['tmp_name']);
    query('INSERT INTO user VALUES (\'\',:nama,:email,:password,:jeniskelamin,:time,:telepon,:alamat,:keterangan,:foto)',
    array(':nama'=>$nama,':email'=>$email,':password'=>$password,':jeniskelamin'=>$jeniskelamin,':time'=>$time,'telepon'=>$telepon,':alamat'=>$alamat,':keterangan'=>$keterangan,':foto'=>$foto));
    $id = query('SELECT id from user WHERE nama = :nama order by id DESC',array(':nama'=>$nama))[0]['id'];
    setcookie("uid",$id,time()+60*60*24, '/', null, null, true);
    redirect('./user/index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Softball Registration Form Flat Responsive widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Softball Registration Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- font files -->
	<link href="//fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
	<!-- /font files -->
	<!-- css files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
	<!-- /css files -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>

<body>
	<div class="w3-banner-main">
		<div class="center-container">
			<h1 class="header-w3ls">Softball Registration Form</h1>
			<div class="content-top">
				<div class="content-w3ls">
					<div class="form-w3ls">
						<form action="./index.php" method="post" enctype="multipart/form-data">
							<div class="content-wthree1">
								<div class="grid-agileits1">
									<div class="form-control">
										<label class="header">Player Name </label>
										<input type="text" id="name" name="nama" placeholder="" title="Please enter your Full Name" required="">
									</div>

									<div class="form-control">
										<label class="header">Email </label>
										<input type="email" id="email" name="email" placeholder="" title="Please enter a Valid Email Address"
										 required="">
									</div>

									<div class="form-control">
										<label class="header"> password </label>
										<input type="text" id="name" name="password" placeholder="" title="Please enter your Full Name" required="">
									</div>
									<div class="grid-w3layouts1">
										<div class="w3-agile1">
											<label class="rating">Choose gender </label>
											<ul>
												<li>
													<input type="radio" id="a-option" name="jeniskelamin" value="L">
													<label for="a-option">Male </label>
													<div class="check"></div>
												</li>
												<li>
													<input type="radio" id="b-option" name="jeniskelamin" value="P">
													<label for="b-option">Female</label>
													<div class="check">
														<div class="inside"></div>
													</div>
												</li>

											</ul>
										</div>
									</div>
									<div class="form-control">
										<label class="header">Time </label>
										<input id="datepicker1" name="time" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
										 required="">
									</div>
								</div>
							</div>
					</div>
					<div class="form-w3ls-1">
						<div class="form-control">
							<label class="header">Phone Number </label>
							<input type="text" id="name" name="telepon" placeholder="" title="Please enter your Phone Number" required="">
						</div>
						<div class="form-control">
							<label class="header">Address </label>
							<input type="text" id="name" name="alamat" placeholder="" title="Please enter your Full Name" required="">
						</div>

						<div class="form-control">
							<label class="header">foto diri </label>
							<input type="file" id="name" name="foto" placeholder="" title="Please enter your Full Name" required="">
						</div>

						<div class="form-control Insurance">
							<label class="header">Ketarangan </label>
							<textarea name="keterangan" placeholder="" title="" required=""></textarea>
						</div>
						<input type="submit" value="Registration" name="iyaditekan">
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<p class="copyright">© 2018 Softball Registration Form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
				 target="_blank">W3layouts</a></p>
		</div>
	</div>

	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>

</body>

</html>