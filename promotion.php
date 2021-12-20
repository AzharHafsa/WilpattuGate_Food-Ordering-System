<?php
session_start();
$conn=mysqli_connect("localhost", "root","","wilpattu");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>promotions</title>
	<link rel="stylesheet" type="text/css" href="static/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
	 <link rel="import" href="nav.php">
	 <link rel="import" href="footer.php">
</head>
<body class="bg">
<div class="navdiv">
	 <?php include_once("nav.php");?>
</div>

<div class="promo-container">

	 <div class="cat-container-title" id="ff"><h2 class="menuText">Promotions</h2><hr class="menuLine"></div>
                
        <div class="promo-grid-container">
        <?php        
        $sql="SELECT * FROM promotion";
        $result= mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
            echo "<div class='grid-item-promo'>";
            echo " <div class='card shadow'>";       
            echo "<img class='card-img-top' src='static/images/".$row['pImage']."' alt='Card image cap'>";           
            echo "<div class='card-body'>";
            echo " <h5 class='card-title'>".$row['pTitle']." (Rs:".$row['pPrice'].")</h5>";            
            echo "<p class='card-text text-muted'>".$row['pText']."</p>";               
            echo "</div>";          
            echo " </div>";     
            echo "</div>";
        }   
        
        ?>          
        </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include_once("footer.php");?>
</body>
</html>