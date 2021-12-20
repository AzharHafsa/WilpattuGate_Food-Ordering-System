
<?php
session_start();
$conn= mysqli_connect("localhost","root","","wilpattu");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);     
    $sql = "SELECT *
     FROM users WHERE email = '$username' and password = '$password' or phone='$username' and password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if(!empty($_POST["remember"])){
        setcookie ("username",$username,time()+ (10 * 365 * 24 * 60 * 60));  
        setcookie ("password",$password,time()+ (10 * 365 * 24 * 60 * 60));
           
    }else{
        if(isset($_COOKIE["username"])){
            setcookie ("username","");
        }
        if(isset($_COOKIE["password"])){
            setcookie ("password","");
        }
    }

    if($count>0){
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($row['role']=="admin"){
               $_SESSION['login_user'] = $username;       
                header("location:Admin/adminHome.php");
            }else if($row['role']=="user"){
               $_SESSION['user_email'] = $username; 
                $_SESSION['user_password'] = $password;  
                header("location:Home.php");
            }
        }
    }else{
        echo '<script> alert("Your Login Name or Password is invalid")</script>';
    }
      
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi user login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  type = "text/css" href="static/css/style.css"> 
	 
</head>
<body>
    <div class="container1">
        <img src="static/images/wlogo4.png" alt="logo" class="img">
        <form name="login" action="" method="POST">
            <h3 class='heading'>login Here!</h3><hr></br>

            <div class="content">
                <label> Email</label>
                <input type="text" placeholder="Your email" class="form-control" name="username" id="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>
            </div>

            <div class="content">
                <label>Password</label>
                <input type="password" placeholder="Your Password" class="form-control" name="password" id="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?>  >
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>

            <div class="content1">
                 <button type="submit" class="btn btn-secondary btn-md" id="login" name="login">Login</button>
                <a href="signUp.php" class="btn btn-secondary btn-md" role="button">Create account</a>
            </div>
            <div class="content1"> 
                                   
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-instagram"></a>
            </div>

        </form>

    </div>
    
</body>
</html>