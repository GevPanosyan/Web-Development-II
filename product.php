<?php 
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
 ?>
<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<style type="text/css">
				body{
					background-color: #DBDBDB; 
				}
				.item{
					box-shadow: 10px 10px 10px #D3D3D3;
					width: 100%;
					height: 600px;
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
					width: 620px;
					height: inherit;
					border: 2.5px solid #D3D3D3;
					box-shadow: 10px 10px 10px #D3D3D3;
					float: left;
				}
				.pref{
					text-align: center;
					height: inherit;
					width: 700px;
					margin: auto;
					margin-left: 100px;
					display: inline-block;
					float: left;
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
					font-size: 21px;
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
				.dep2, .dep3{
					width: 280px;
					height: inherit;
					background-color: inherit;
					text-align: center;
					float: left;
				}
				.dep2:hover, .dep3:hover{
					background-color:#0D8A86;
				}
				.main{
					height: auto;
					width: 100%;
					background-color: white;
					margin-top: 150px;
				}
			</style>
		</head>
		<body>
				<?php include 'header.php'  ?>
			<div class="main">
				<?php 
				//passowrd(windows) = usbw; password(mac) = root
				$link = mysqli_connect("localhost","root","usbw","gevorg");
				$sql = "SELECT * FROM `product` WHERE `id`=$_GET[id]";
				$result = mysqli_query($link, $sql);
				mysqli_close($link);
			 	?>
				<?php while ($r = mysqli_fetch_assoc($result)) {?>
			 	<div class="item">
					<img src="<?php echo($r["image"])?>">
					<div class="pref">
						<h1><?php echo $r["title"]; ?></h1>
						<p class="price">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="price">
							Made In : Armenia <br>	
							Price : <?php echo $r["price"]."$"; ?>
						</p>
						<button type="button" class="rm"><a href="">Add to Cart</a></button>
					</div>
				</div>
			    <?php }?>
			</div>
		</body>
</html>