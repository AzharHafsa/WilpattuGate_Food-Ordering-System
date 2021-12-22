<?php 
  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "wilpattu"); 

 if(isset($_POST["exit"])){
   
        unset($_SESSION["shopping_cart"]); 
        header("Location: index.php"); 
        exit();
 } 

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>cartSummary</title>  
           <link rel="stylesheet" type="text/css" href="static/css/styles.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&family=Playball&display=swap" rel="stylesheet"> 
      </head>  
      <body class="bg"> 
        
                
           <div class="container  cartContainer" style="width:800px;">  
                <?php  
                if(isset($_POST["place_order"]))  
                {  
                    $user_email= $_SESSION['user_email'];
                    $password = $_SESSION['user_password'];                
                    $sql= "select * from users where email ='$user_email' and password='$password'";
                    $result = mysqli_query($connect,$sql);
                    $row=mysqli_fetch_array($result);

                    $user_id=$row['id'];

                    $deliveryAddress = $_SESSION['deliveryAddress'];

                    date_default_timezone_set("Asia/colombo");
                     $insert_order = "  
                     INSERT INTO order_table(uId, creationDate, deliveryAddress, orderStatus)  
                     VALUES(?, '".date('Y-m-d H:i:s')."', ?, 'pending')  
                     ";  
                     $stmt = $connect->prepare($insert_order);
                     $stmt->bind_param("ss",$user_id ,$deliveryAddress);

                     $order_id = "";  
                     if($stmt->execute())  
                     {  
                          $order_id = mysqli_insert_id($connect);  
                     }  
                     $_SESSION["order_id"] = $order_id;  
                     $order_details = "";  
                     foreach($_SESSION["shopping_cart"] as $keys => $values)  
                     {  
                          $order_details .= "  
                          INSERT INTO order_details( order_id, product_name, product_price, product_quantity)  
                          VALUES('".$order_id."', '".$values["product_name"]."', '".$values["product_price"]."', '".$values["product_quantity"]."');  
                          ";  
                     }  
                     if(mysqli_multi_query($connect, $order_details))  
                     {  
                           
                          echo '<script>alert("You have successfully place an order...Thank you")</script>';  
                          echo '<script>window.location.href="cart.php"</script>';  
                     }  
                }  
                if(isset($_SESSION["order_id"]))  
                {  
                     $customer_details = '';  
                     $order_details = '';  
                     $total = 0;  
                     $query = '  
                     SELECT * FROM order_table  
                     INNER JOIN order_details  
                     ON order_details.order_id = order_table.order_id  
                     INNER JOIN users  
                     ON users.id = order_table.uid  
                     WHERE order_table.order_id = "'.$_SESSION["order_id"].'"  
                     ';  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $customer_details = '  
                          Name: <label> '.$row["firstName"].'</label>  
                          <p>Contact No: '.$row["phone"].'</p>  
                          <p>Ordered Date: '.$row["creationDate"].'</p>
                          <p>Delivery Address: '.$row["deliveryAddress"].'</p>
                          ';  
                          $order_details .= "  
                               <tr>  
                                    <td>".$row["product_name"]."</td>  
                                    <td>".$row["product_quantity"]."</td>  
                                    <td>".$row["product_price"]."</td>  
                                    <td>".number_format($row["product_quantity"] * $row["product_price"], 2)."</td>  
                               </tr>  
                          ";  
                          $total = $total + ($row["product_quantity"] * $row["product_price"]);  
                     }  
                     echo '  
                     <h5 align="center">Wilpattu-Gate Restuarant</h5>
                     <h3 align="center" class="cartText">Order Summary for Order No.'.$_SESSION["order_id"].'</h3>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td ><label>Customer Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>'.$customer_details.'</td>  
                               </tr>  
                               <tr>  
                                    <td><label>Order Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Product Name</th>  
                                                   <th width="15%">Quantity</th>  
                                                   <th width="15%">Price</th>  
                                                   <th width="20%">Total</th>  
                                              </tr>  
                                              '.$order_details.'  
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td>'.number_format($total, 2).'</td>  
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table>  
                          
                     </div>  

                     ';  
                }  
                ?> 
                <div class='row'>
                          <div class='col-sm-6'>
                              <a href="menu.php" class="btn btn-success">Continue Shopping</a>      
                          </div>
                          <div class='col-sm-6'>  
                              <form method="POST" action=""><button type="submit" class="btn btn-success" name="exit">Exit</button> </form>
                   
                          </div>
                        </div>
              </div>

                 
           </div>  
      </body>  
 </html> 
