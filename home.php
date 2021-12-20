<?php
session_start();

$conn=mysqli_connect("localhost","root","","wilpattu");
if(isset($_POST['AddSend'])){
    $no="";
    $city="";
   
    $no=$_POST['houseNo'];
    $city=$_POST['streetCity'];
    $address = $no . ',' . $city;

    $_SESSION['deliveryAddress']=$address;

    header('Location: menu.php');
    
}

if(isset($_POST['takeAwayBtn'])){

    $_SESSION['deliveryAddress']="No Delivery";

    header('Location: menu.php');
    
}
     
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
				<button class="ghost-button-semi-transparent" id="deliveryBtn">Delivery</button>
				<form method="POST" action=""><button type="submit" name="takeAwayBtn" class="ghost-button-semi-transparent" id="takeAwayBtn">Take away</button></form>
					
				<h3 class="moto"> The pleasure of variety on your plate...</h3>
				<hr class="line">
			</div>
		</div>

	

		<div class="container-2">
			<div class="container-2-row-1"><h2 class="menuText">Our Menu</h2><hr class="menuLine"></div>
			<div class="container-2-row-2">
                  <div class="grid-item"><a href="itemDisplay.php?cName=Submarine And Sandwitch&cId=12"><img class="menuImg" src="static/images/sub.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Starters&cId=21"><img class="menuImg" src="static/images/start.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Shawarma&cId=5"><img class="menuImg" src="static/images/shawarma.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Short Eats&cId=4"><img class="menuImg" src="static/images/seats.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Fried Rice&cId=7"><img class="menuImg" src="static/images/fr.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Indian Biryani&cId=9"><img class="menuImg" src="static/images/inbir.jpg"></a></div>  
                  <div class="grid-item"><a href="itemDisplay.php?cName=Rice And Curry&cId=16"><img class="menuImg" src="static/images/rc.jpg"></a></div>     
                  <div class="grid-item"><a href="itemDisplay.php?cName=Fresh Juice&cId=19"><img class="menuImg" src="static/images/fj.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Milk Shake&cId=20"><img class="menuImg" src="static/images/ms.jpg"></a></div>  
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Dessert&cId=1"><img class="menuImg" src="static/images/des.jpg"></a></div>     
                  <div class="grid-item"><a href="itemDisplay.php?cName=Indian Cuisine&cId=13"><img class="menuImg" src="static/images/ic.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Noodles&cId=8"><img class="menuImg" src="static/images/noo.jpg"></a></div>

			</div>

			<div class="container-2-row-3">
			<a class="btn btn-danger button" href="menu.php">View All Menus</a>
			</div>
		</div>

		<?php include_once("footer.php");?>

	<!--Delivery modal DIV-->
	
	<div id="deliveryModal" class="modal">
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    <div class="modalTitle">Enter Your Location</div>
	   	<div class="address">
	   		<form method="POST" action="">
	   			<div >
	   			<div >
	   				<label>House No: *</label>
	   				<input type="text" required class="form-control" name="houseNo" placeholder="EX: 86/1">
	   			</div>
	   			<div >
	   				<label>Street & City: *</label>
	   				<input type="text" required class="form-control" name="streetCity" placeholder="Street and City " id="search_input">
	   				<small id="emailHelp" class="form-text text-muted">Please type the first letter of your street.</small>
	   			</div>


	   			<div>
	   				<button type="submit" class="btn btn-success btn-block modalBtn" name="AddSend" id="AddSend">Continue</button>
	   			</div>
	   		
	   		</form>
	   	</div>
	  </div>
	</div>	



	<script>
		var modal = document.getElementById("deliveryModal");
		var btn = document.getElementById("deliveryBtn");
		var span = document.getElementsByClassName("close")[0];
		
		document.getElementById("takeAwayBtn").onclick = function () {
        location.href = "menu.php";
    	};

		btn.onclick = function() {
		  modal.style.display = "block";
		}
		span.onclick = function() {
		  modal.style.display = "none";
		}

		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}



		function activatePlacesSearch(){
			var input = document.getElementById('searchTerm');
			var autocomplete = new google.maps.places.Autocomplete(input);
		}

	</script>

	<script>
   function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["1st Cross Street","2nd Cross Street","3rd Cross Street","4th Cross Street","5th Cross Street","6th Cross Street","7th Cross Street","8th Cross Street","9th Cross Street","10th Cross Street","11th Cross Street","Anuradhpura Road","Goodshed Road","Hasanath Road","Kk Street","Karuppu tharawa","Kurunegala Road","Kuwait Hospital Road","Manalkunru Road","Mannar Road","Marikkar Street","Masjid Road","Mariymman Kovil","Mehara Road","Nedunkulam Road","Noor Masjid Road","Poles Road","Spill Road","Saweewapuram","Udayar Lane","Weppamadu","Vettukkulam Road"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("search_input"), countries);
</script>

	
</body>
</html>


