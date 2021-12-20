<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link rel="stylesheet" type="text/css" href="static/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="home.php"><img src="static/images/logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt=""> Wilpattu-Gate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="menu.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="menu.php#ff">Fast Food</a>
                <a class="dropdown-item" href="menu.php#rb">Rice/Biryani</a>
                <a class="dropdown-item" href="menu.php#dd">Drinks and Dessert</a>
                <a class="dropdown-item" href="menu.php#ms">Masala</a>
                <a class="dropdown-item" href="menu.php#others">More..</a>
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="promotion.php" >Promotions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact-Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About-Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
          </ul>
        </div>
      </nav>
</body>
</html>