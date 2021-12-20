<?php
session_start();
$conn=mysqli_connect("localhost","root","","wilpattu");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gallery</title>
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

<div class="galleryContainer">
		<h2 class="feed-form-title">Gallery</h2>
		
		<?php
		$sql="SELECT * FROM gallery";
		$result= mysqli_query($conn,$sql);

		echo "<div class='container-2-row-2' >";
		$i=1;
		 while($row=mysqli_fetch_array($result)){
                  echo "<div class='grid-item'><img src='static/images/".$row['gImage']."' style='width:180px; height:150px;' onclick='opengalModal();currentSlide(".$i.")' class='hover-shadow cursor'></div>";
                  $i=$i+1;
                  }

		echo "</div>";
		?>

		<div id="mygalModal" class="galmodal">
  		<span class="galclose cursor" onclick="galclosegalModal()">&times;</span>
  		<div class="galmodal-content">

  			<?php
  				$sql="SELECT * FROM gallery";
				$result= mysqli_query($conn,$sql);
  				  $rowcount=mysqli_num_rows($result);
  				  $i=1;
  				  while($row=mysqli_fetch_array($result)){
  				  		echo "<div class='mySlides'>";
					      echo "<div class='numbertext'>".$i." / ".$rowcount."</div>";
					      echo "<img src='static/images/".$row['gImage']."' style='width:80%;' class='galImg img-fluid'>";
					   echo "</div>";
					   $i=$i+1;
					}
  				 
  			?>
  			    
		    
		    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>

		    <div class="caption-container">
		      <p id="caption"></p>
		    </div>

		   <?php

		  	    $sql="SELECT * FROM gallery";
				$result= mysqli_query($conn,$sql);
		   		echo "<div class='container-2-row-2' style='width:80%;'>";
				$i=1;
				 while($row=mysqli_fetch_array($result)){
		                  echo "<div class='grid-item'><img src='static/images/".$row['gImage']."' style='width:180px; height:150px;' onclick='opengalModal();currentSlide(".$i.")' class='hover-shadow cursor'></div>";
		                  $i=$i+1;
		                  }

				echo "</div>";
		   ?>
		     

	    </div>
		</div>

</div>

	<script>
		function opengalModal() {
		  document.getElementById("mygalModal").style.display = "block";
		}

		function galclosegalModal() {
		  document.getElementById("mygalModal").style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	
<?php include_once("footer.php");?>
</body>
</html>