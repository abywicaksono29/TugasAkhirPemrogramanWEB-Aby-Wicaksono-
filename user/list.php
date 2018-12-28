<?php
	include('../config/config.php');
?><!--
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
    <style>
    table{
        width:100%;
        border : 1px solid white;
    }
    td{
        color : white;
    }
    th{
        font-weight : bold;
    }
    </style>
</head>

<body>

	<!-- main -->

	<div class="center-container">

		<div class="w3ls_banner_info">


			<h1>Square Profile </h1>
			<div class="profile">
				<div class="wrap">
                
                    <table>
                    <tr>
                            <th >
                                Nama
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Gender
                            </th>
                            <th>
                                Password
                            </th>
                            <th>
                                Time
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Nomor HP
                            </th>
                            <th>
                                Keterangan
                            </th>
                            <th>
                                ID
                            </th>


                        </tr>
                    <?php 
                	$data = query('SELECT * from user');
                    foreach ($data as $i) {
                        $nama = $i['nama'];
                        if($i['jenis_kelamin']=='P'){
                            $i['jenis_kelamin'] = "Perempuan";
                        }else{
                            $i['jenis_kelamin']= "Laki - laki";
                        }
                
                        echo '
                        <tr>
                            <td>
                                '.$nama.'
                            </td>
                            <td>
                                '.$i['email'].'
                            </td>
                            <td>
                                '.$i['jenis_kelamin'].'
                            </td>
                            <td>
                                '.$i['password'].'
                            </td>
                            <td>
                                '.$i['time'].'
                            </td>
                            <td>
                                '.$i['alamat'].'
                            </td>
                            <td>
                                '.$i['nomer_hp'].'
                            </td>
                            <td>
                                '.$i['keterangan'].'
                            </td>
                                <td>
                                '.$i['id'].'
                            </td>


                        </tr>
                        ';
                    }
                    ?>
                    </table>
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


</body>

</html>