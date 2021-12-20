<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>menu</title>
	<link rel="stylesheet" type="text/css" href="static/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
	
</head>
<body >
	<div class="navdiv">
     <?php include_once("nav.php");?>
	</div>

    <div>
           <div class="cat-container">
                <div class="cat-container-title" id="ff"><h2 class="menuText">Fast Foods</h2><hr class="menuLine"></div>
                <div class="cat-container-grid">
                  <div class="grid-item"><a href="itemDisplay.php?cName=Submarine And Sandwitch&cId=12"><img class="menuImg" src="static/images/sub.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Starters&cId=21"><img class="menuImg" src="static/images/start.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Burger&cId=11"><img class="menuImg" src="static/images/burger.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Short Eats&cId=4"><img class="menuImg" src="static/images/seats.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Pizza&cId=23"><img class="menuImg" src="static/images/pizza.jpg"></a></div>  
                  <div class="grid-item"><a href="itemDisplay.php?cName=Shawarma&cId=5"><img class="menuImg" src="static/images/shawarma.jpg"></a></div>
                                         
                </div>
           </div>

           <div class="cat-container">
                <div class="cat-container-title" id="rb"><h2 class="menuText">Rice/Biryani</h2><hr class="menuLine"></div>
                <div class="cat-container-grid">
                  <div class="grid-item"><a href="itemDisplay.php?cName=Fried Rice&cId=7"><img class="menuImg" src="static/images/fr.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Fried Rice Srilanakan&cId=15"><img class="menuImg" src="static/images/frs.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Indian Biryani&cId=9"><img class="menuImg" src="static/images/inbir.jpg"></a></div>  
                  <div class="grid-item"><a href="itemDisplay.php?cName=Local Biryani&cId=10"><img class="menuImg" src="static/images/lob.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Rice And Curry&cId=16"><img class="menuImg" src="static/images/rc.jpg"></a></div>     
                </div>
          </div>


           <div class="cat-container">
                <div class="cat-container-title" id="ms"><h2 class="menuText">Masala</h2><hr class="menuLine"></div>
                <div class="cat-container-grid">
                  <div class="grid-item"><a href="itemDisplay.php?cName=Cuttle Fish Masala&cId=29"><img class="menuImg" src="static/images/cf.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Mutton Masala&cId=26"><img class="menuImg" src="static/images/mm.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Chicken Masala&cId=30"><img class="menuImg" src="static/images/cm.jpg"></a></div>  
                  <div class="grid-item"><a href="itemDisplay.php?cName=Fish Masala&cId=27"><img class="menuImg" src="static/images/fm.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Prawn Masala&cId=28"><img class="menuImg" src="static/images/pm.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Vegitable masala&cId=14"><img class="menuImg" src="static/images/vg.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Beef Masala&cId=31"><img class="menuImg" src="static/images/.jpg"></a></div>      
                </div>
          </div>

           <div class="cat-container">
                <div class="cat-container-title" id="dd"><h2 class="menuText">Drinks & Dessert</h2><hr class="menuLine"></div>
                <div class="cat-container-grid">
                  <div class="grid-item"><a href="itemDisplay.php?cName=Fresh Juice&cId=19"><img class="menuImg" src="static/images/fj.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Mocktails&cId=3"><img class="menuImg" src="static/images/mock.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Milk Shake&cId=20"><img class="menuImg" src="static/images/ms.jpg"></a></div>  
                  <div class="grid-item"><a href="itemDisplay.php?cName=Smoothies&cId=2"><img class="menuImg" src="static/images/smoo.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Soup&cId=22"><img class="menuImg" src="static/images/soup.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Salads&cId=6"><img class="menuImg" src="static/images/salads.jpg"></a></div> 
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Dessert&cId=1"><img class="menuImg" src="static/images/des.jpg"></a></div>     
                </div>
          </div>


           <div class="cat-container">
                <div class="cat-container-title" id="others"><h2 class="menuText">Others</h2><hr class="menuLine"></div>
                <div class="cat-container-grid">
                  <div class="grid-item"><a href="itemDisplay.php?cName=Indian Cuisine&cId=13"><img class="menuImg" src="static/images/ic.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Italian&cId=24"><img class="menuImg" src="static/images/ital.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Maccican Tacos&cId=25"><img class="menuImg" src="static/images/mt.jpg"></a></div>  
                  <div class="grid-item"><a href="itemDisplay.php?cName=Noodles&cId=8"><img class="menuImg" src="static/images/noo.jpg"></a></div>
                  <div class="grid-item"><a href="itemDisplay.php?cName=Chinese Cuisine&cId=17"><img class="menuImg" src="static/images/cc.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Chopsuey&cId=18"><img class="menuImg" src="static/images/ch.jpg"></a></div>
                  <div class="grid-item" ><a href="itemDisplay.php?cName=Kottu&cId=32"><img class="menuImg" src="static/images/.jpg"></a></div>     
                </div>
          </div>              
    </div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php include_once("footer.php");?>

</body>
</html>