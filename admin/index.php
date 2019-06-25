<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Rajdhani" rel="stylesheet">
	<title></title>
	<style type="text/css">
		form{
			width: 500px;
			height: 500px;
			background-color: #D3D3D3;
			border: 1px solid white;
			font-size: 25px;	
			font-family: 'Cinzel', serif;
			color: #0D8A86;
			display: inline-block;
			padding: 5px;
		}
		h1{
			font-size: 45px;
			font-family: 'Cinzel', serif;
			color: #0D8A86;
			text-align: center;
			margin: auto; 
		}
		input{
			width: 460px;
			color: black;
			font-size: 24px;
		}
		textarea{
			width: 460px;
			height: 100px;
			font-size: 24px;
		}
	</style>
</head>
<body>
	<?php include 'header.php' ?>
	<form method="post" action="gev_panosyan/index.php">
		<h1>Add an Item</h1>
		Title:<input type="text" name="title"><br>
		Price:<input type="text" name="price"><br>	
		Image:<input type="text" name="image"><br>	
		Description:<textarea name="info"></textarea><br>
		<input type="submit" name="submit">
	</form>
	<form method="get" action="gev_panosyan/index.php">
		<h1>Add an Item</h1>
		Title:<input type="text" name="title"><br>
		Price:<input type="text" name="price"><br>	
		Image:<input type="text" name="image"><br>	
		Description:<textarea name="info"></textarea><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>