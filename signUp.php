<?php
session_start();
//print_r($_POST);


$conn=mysqli_connect("localhost", "root","","wilpattu");
if(isset($_POST['register'])){
$firstName="";
$lastName="";
$email="";
$phone= "";
$password="";
$confirmPassword="";
//$errors = array(); 

	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
    $email= $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid format and please re-enter valid email"; 
     }
    $phone= $_POST['phone'];    
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword']; 
	
	$firstName=stripcslashes($firstName);
	$lastName=stripcslashes($lastName);
    $email=stripcslashes($email);
    $phone=stripcslashes($phone);
    $password=stripcslashes($password);
    $confirmPassword=stripcslashes($confirmPassword);
   
	
		
		$firstName=mysqli_real_escape_string($conn,$firstName);
		$lastName=mysqli_real_escape_string($conn,$lastName);
        $email=mysqli_real_escape_string($conn,$email);
        $phone=mysqli_real_escape_string($conn,$phone);
        $password=mysqli_real_escape_string($conn,$password);
        $confirmPassword=mysqli_real_escape_string($conn,$confirmPassword);

        $sql="SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
           echo "<script>alert('email already exist !')</script>";
        }
        else{
            if($password== $confirmPassword){
        
                $query="INSERT INTO users(firstName,lastName,email,phone,password,role) VALUES ('$firstName','$lastName',
                '$email','$phone','$password','user')";
                $result=mysqli_query($conn,$query);
                $_SESSION['login_user'] = $email;        
                 header("location: login.php");            
               
            } else{
               echo " <script language='javascript'>";
               echo "alert('An error occured ! try again')";
               echo " </script>";            
            }
        }
       
        
     
       
	}
	

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<di>, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  type = "text/css" href="static/css/style.css">
    <style>
     .adbg{
    background-color:rgb(229, 231, 233);
    }  
    </style>
</head>
<body class=".adbg">
    <div class="container1">
         <img src="static/images/wlogo4.png" alt="logo" class="img">
        <form name="signUp" id="signUp" action="signUp.php" method="POST">
            <h3 class='heading'>Become a memeber</h3><hr></br>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <label>First Name*</label>
                      <input type="text" class="form-control form-control-sm" placeholder="First Name" name="firstName" id="firstName" required>
    
            
                    </div>
                    <div class="col-md-6">
                        <label>Last Name*</label>
                        <label></label>
                      <input type="text" class="form-control form-control-sm" placeholder="Last Name" name="lastName" id="lastName" required>
                      
                    </div>
                </div>            
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <label>Email*</label>
                      <input type="email" class="form-control form-control-sm" placeholder="Your email" name="email" id="email"  required>
                      
                    </div>
                    <div class="col-md-6">
                        <label>Phone*</label>
                        <label></label>
                      <input type="tel" class="form-control form-control-sm" placeholder="Ex:0700000000" name="phone" id="phone" pattern="/^[0-9]{10}+$/" title="Must contain 10 numbers" required>
                     
                    </div>
                </div>            
            </div>

           <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <label>Password*</label>
                  <input type="password" class="form-control form-control-sm" placeholder="Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                 
                </div>
                <div class="col-md-6">
                    <label>Confirm Password*</label>
                    <label></label>
                  <input type="password" class="form-control form-control-sm" placeholder="Confirmed Password" name="confirmPassword" id="confirmPassword" required>
                  
                </div>
            </div>  
           </div> 
           
           <div class="btn">
            <button type="submit" class="btn btn-secondary btn-md" id="register" name="register">Register</button>
           </div>
        </div>
        </form>

    </div>
</body>
</html>