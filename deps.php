<?php 
	if ($_POST["submit"]!="") {
		$title = $_POST["title"];
		$image = $_POST["image"];
		$price = $_POST["price"];
		$info  = $_POST["info"];
			
		$link = mysqli_connect("localhost","root","usbw","gevorg");
		$sql = "INSERT INTO `product`(`title`,`image`,`price`,`info`) VALUES('$title', '$image', $price, '$info')";
		$result = mysqli_query($link, $sql);
		mysqli_close($link);
	}
 ?>
<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<style type="text/css">
				body{
					background-color: white; 
				}
				.item{
					border: 2.5px solid #D3D3D3;
					box-shadow: 10px 10px 10px #D3D3D3;
					width: 450px;
					height: 200px;
					border-radius: 10px;
					padding: 3px;
					display: inline-block;
					margin: 5px;
					margin-left: 40px;
					margin-top: 40px;
					background-color: white;
				}
				img{
					text-align: center;
					margin: auto;
					width: 200px;
					height: inherit;
				}
				.pref{
					text-align: center;
					height: inherit;
					width: 250px;
					margin: auto;
					display: inline-block;
					float: right;
				}
				.price{
					font-size:25px; 
					margin-top: 20px;
					font-family: 'Rajdhani', sans-serif;
					color: #0D8A86;
				}
				h1{
					font-family: 'Rajdhani', sans-serif;
					color: #0D8A86;
					margin-top: 32px;
				}
				.rm{
					height: 38px;
					width: 170px;
					margin-top: -20px;
					margin-left: 12px;
					border-radius: 25px;
					box-shadow: none;
					background-color: #0D8A86;
					border-color: #0D8A86;
					color: white;
					font-size: 15px;
					font-family: 'Teko', sans-serif;
				}
				a{
					color: white;
					font-size: 15px;
					font-family: 'Teko', sans-serif;
					text-decoration: none;
				}
				.header{
					position: absolute;
					left: 0;
					top: 0;
					right: 0;
					width: 100%;
					height: 250px;
					border: none;
					background-color: white;
				}
				.logo{
					position: absolute;
					top: 0;
					right: 0;
					left: 0;
					width: 100%;
					height: 200px;
					background-color: #0D8A86;
				}
				.menu{
					display: block;
					height: 50px;
					width: 100%;
					left: 0;
					right: 0;
					background-color: 	#D3D3D3;
					margin-top: 200px;
				}
				.pic{
					height: 200px;
					width: 1200px;
					background-color: inherit;
					left: 0;
					top: 0;
					float: left;
				}
				.search{
					height: 200px;
					width: 193px;
					background-color: inherit;
					right: 0;
					top: 0;
					float: right;
				}	
				.hh1{
					font-family: 'Orbitron', sans-serif;
					font-size: 150px;
					margin: auto;
					margin-top: 40px;
					color: #C4CCD7;
					text-align: center;
				}
				.dep{
					margin-left: 5px;
					width: 280px;
					height: inherit;
					background-color: inherit;
					text-align: center;
					float: left;
				}
				.h{
					margin-top: 5px;
					margin-bottom: 5px;
					font-size: 35px;
					color:#288289 ;
					text-align: center;
				}
				.dep:hover{
					background-color:#0D8A86;
				}
				.h:hover{
					color:#C4CCD7;
				}
				.dep1{
					width: 280px;
					height: inherit;
					background-color: inherit;
					text-align: center;
					float: left;
				}
				.dep1:hover{
					background-color:#0D8A86;
				}
				.dep2, .dep3, .dep4{
					width: 280px;
					height: inherit;
					background-color: inherit;
					text-align: center;
					float: left;
				}
				.dep2:hover, .dep3:hover, .dep4:hover{
					background-color:#0D8A86;
				}
				.main{
					height: auto;
					width: 100%;
					background-color: white;
					margin-top: 230px;
				}
				.a{
					width: 450px;
					height: 300px;
					border: 2.5px solid #D3D3D3;
					box-shadow: 10px 10px 10px #D3D3D3;
					margin-top: 20px;
					display: inline-block;
					margin-left: 20px;
					text-align: center;
				}
				.b{
					margin: auto;
				}
				img{
					margin: auto;
					width: 300px;
					height: 250px;

				}
			</style>
		</head>
		<body>
			<?php include 'header.php' ?>
			<div class="main">
				<a href="phones.php">
					<div class="a">
						<h1 class="b">Mobile Phones</h1>
						<img src="https://thumbs.dreamstime.com/z/mobile-phone-hand-flat-style-vector-illustration-eps-46733175.jpg">
					</div>
				</a>
				<a href="comp.php">
					<div class="a">
						<h1 class="b">Computers</h1>
						<img src="https://tse1.mm.bing.net/th?id=OIP.fXlY4GAIXBWDgsTeAppkiQHaH5&pid=Api&P=0&w=300&h=300">
					</div>
				</a>
				<a href="video.php">
					<div class="a">
						<h1 class="b">Video Games</h1>
						<img src="https://tse4.mm.bing.net/th?id=OIP.re5gTgHkMh6Hc8gkPK_vcwHaHa&pid=Api&P=0&w=300&h=300">
					</div>
				</a>
				<a href="console.php">
					<div class="a">
						<h1 class="b">Game Consoles</h1>
						<img src="https://tse3.mm.bing.net/th?id=OIP.QwY4_3734rZoP70LyX4OzwAAAA&pid=Api&P=0&w=300&h=300">
					</div>
				</a>
				<a href="gadget.php">
					<div class="a">
						<h1 class="b">Gadgets</h1>
						<img src="https://tse2.mm.bing.net/th?id=OIP.ix41hNj81cS3_e97EZKb2AAAAA&pid=Api&P=0&w=300&h=300	">
					</div>
				</a>
			</div>
		</body>
	</html>