<?php
session_start();

$conn=mysqli_connect("localhost","root","","wilpattu");
if(isset($_POST['send'])){
    $fType="";
    $fMessage="";
    $fName="";
    $lName="";
    $email="";
    $phone="";

    $fType=$_POST['fType'];
    $fMessage=$_POST['fMessage'];
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $email=$_POST['email'];
	$phone=$_POST['phone'];   
   
    $fType=stripcslashes($fType);
    $fMessage=stripcslashes($fMessage);
    $fName=stripcslashes($fName);
    $lName=stripcslashes($lName);
    $email=stripcslashes($email);
    $phone=stripcslashes($phone);

    $fType=mysqli_real_escape_string($conn,$fType);
    $fMessage=mysqli_real_escape_string($conn,$fMessage);
    $fName=mysqli_real_escape_string($conn,$fName);
    $lName=mysqli_real_escape_string($conn,$lName);
    $phone=mysqli_real_escape_string($conn,$phone);
	$email=mysqli_real_escape_string($conn,$email);
	
	
    $query="INSERT INTO feedback (fType,fMessage,fName,lName,phone,email) VALUES ('$fType','$fMessage','$fName','$lName','$phone','$email')";
    $result=mysqli_query($conn,$query);
    $_SESSION['login_user']=$email;
	echo "<script>alert('your message has been sent !')</script>";


}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contactUs</title>
	<link rel="stylesheet" type="text/css" href="static/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg">
	<div class="navdiv" >
    	 <?php include_once("nav.php");?>
	</div>

<div class="container">
 	<div class="feedback-container">
 		<form method="POST" action="contactUs.php">
 			<div class="feed-form-title"><h2>Feedback</h2><hr></div>
 			<div class="form-row">
 				<div class="form-group col-md-6">
	 			  <label >Inquiry Type*</label>
			      <select id="fType" name="fType" class="form-control form-control-sm" required >
			        <option selected>Contact</option>
			        <option>Complaint</option>
			        <option>Order Inquiry</option>
			        <option>Appreciation</option>
			      </select>
	 			</div>
 			</div>

 			<div class="form-row">
 				 <div class="form-group col-md-6">
				      <label>First Name*</label>
				      <input type="text" class="form-control form-control-sm" required id="fName" name="fName" placeholder="First Name">
			     </div>
			     <div class="form-group col-md-6">
				      <label>Last Name*</label>
				      <input type="text" class="form-control form-control-sm" required id="lName" name="lName" placeholder="Last Name">
			     </div>
 			</div>

 			<div class="form-row">
 				 <div class="form-group col-md-6">
				      <label>Email*</label>
				      <input type="Email" class="form-control form-control-sm" required id="email" name="email" placeholder="Your email">
			     </div>
			     <div class="form-group col-md-6">
				      <label>Phone No*</label>
				      <input type="text" class="form-control form-control-sm"  required id="phone" name="phone" placeholder="Ex:  0773004005">
			     </div>
 			</div>

 			<div class="form-group">
 				<label>Message</label>
 				<textarea class="form-control form-control-sm" required id="fMessage" name="fMessage" rows="4" placeholder="Your Message..."></textarea>
 			</div>

 			<div >
 				<button type="submit" class="btn btn-success btn-block" name="send" id="send">Send</button>
 			</div>

 		</form>
 	</div>
</div>
<?php include_once("footer.php");?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>