<?php
session_start();

$conn=mysqli_connect("localhost","root","","wilpattu");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>wilpattuGate</title>
	<link rel="stylesheet" type="text/css" href="static/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&family=Playball&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
		
		<div class="container-1">
			<div class="nameDiv"><p class="name" >Wilpattu-Gate</p></div>
			<div class="logoBtnBox">			
				<img src="static/images/logo.jpeg" class="logoImg">
				<button class="ghost-button-semi-transparent" id="deliveryBtn" onclick="location.href = 'login.php';">Delivery</button>
				<button class="ghost-button-semi-transparent" id="takeAwayBtn" onclick="location.href = 'login.php';">Take away</button>
				<button class="ghost-button-semi-transparent" id="loginBtn" onclick="location.href = 'login.php';">Login/Register</button>	
				<h3 class="moto"> The pleasure of variety on your plate...</h3>
				<hr class="line">
			</div>
		</div>

	

		<div class="container-2">
			<div class="container-2-row-1"><h2 class="menuText">Our Menu</h2><hr class="menuLine"></div>
			<div class="container-2-row-2">
			  <div class="grid-item"><img class="menuImg" src="static/images/sub.jpg"></div>
			  <div class="grid-item"><img class="menuImg" src="static/images/seats.jpg"></div>
			  <div class="grid-item"><img class="menuImg" src="static/images/pizza.jpg"></div>  
			  <div class="grid-item"><img class="menuImg" src="static/images/shawarma.jpg"></div>
			  <div class="grid-item"><img class="menuImg" src="static/images/burger.jpg"></div>
			  <div class="grid-item"><img class="menuImg" src="static/images/start.jpg"></div>  
			  <div class="grid-item"><img class="menuImg" src="static/images/frs.jpg"></div>
			  <div class="grid-item"><img class="menuImg" src="static/images/inbir.jpg"></div>
			  <div class="grid-item"><img class="menuImg" src="static/images/lob.jpg"></div>  
			  <div class="grid-item"><img class="menuImg" src="static/images/rc.jpg"></div> 
			  <div class="grid-item"><img class="menuImg" src="static/images/fr.jpg"></div> 
			  <div class="grid-item"><img class="menuImg" src="static/images/salads.jpg"></div> 
			</div>

			<div class="container-2-row-3">
			<a class="btn btn-danger button" href="login.php">View All Menus</a>
			</div>
		</div>

		

	
</body>
</html>


