<?php
session_start();
$conn=mysqli_connect("localhost","root","","wilpattu");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>itemDisplay</title>
	<link rel="stylesheet" type="text/css" href="static/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Fira+Sans+Condensed&family=Open+Sans&family=Pathway+Gothic+One&family=Playball&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="bg">

  <div class="navdiv">
     <?php include_once("nav.php");?>
  </div>
	<div class="row itemRow">
	<div class="col-sm-8">
	<?php
		if(isset($_GET['cName'],$_GET['cId'] )){
				$cName=$_GET['cName'];
				$cId=$_GET['cId'];
				echo "<div class='cat-container-title'><h2 class='menuText'>".$cName."</h2><hr class='menuLine'></div>";
			}	


	    echo "<div class='itemContainer'>";
	    	$conn=mysqli_connect("localhost","root","","wilpattu");
		    $sql="SELECT * FROM item where cId= '$cId' ";
		    $result= mysqli_query($conn,$sql);
		    while($row=mysqli_fetch_array($result)){
					    					    	
	    	echo "<div class='card shadow m-2' style='max-width:230px; padding:5px; border-radius:10px;'>
	    		
				  <img class='card-img-top my-0' src='./static/images/".$row['iImage']."' alt='Card image cap' style='width:100%; height:220px;'>
				  <div class='card-body py-1'>
				    <h6 class='card-title text-center my-1'>".$row['iName']."</h6>
				    <p class='card-text text-center'>Price: Rs.".$row['iPrice']." </p>
				    
				    	<div class='row'>
	                        <div class='col-sm-5'>
	                <input type='number' name='quantity' id='quantity".$row["iId"]."'  class='form-control mb-1 text-center quantity' min='1' value=1 required>
	                          <input type='hidden' name='hidden_name' id='name".$row["iId"]."' value='".$row["iName"]."'>
                              <input type='hidden' name='hidden_price'  id='price".$row["iId"]."' value='".$row["iPrice"]."'>
	                        </div>
	                        <div class='col-sm-7'>                     
	                          <input type='submit' name='addToCart' id='".$row["iId"]."'  class='btn btn-success btn-sm btn-block m-1 addToCart'  value='Add To Cart'>
	                        </div>
                        </div>
				  </div>
				  </div>";

			}
	    echo "</div>";
		   
  	?>
  	</div>
  	<div class="col-sm-4 basketCartArea">
  		<h4>Your cart ! <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></h4>
  		<div class="table-responsive" id="order_table">  
        <table class="table table-bordered table-hover cartTable">
          <thead class="thead-light">
            <tr>
            <th width="30%">Product</th>
            <th width="5%">Quantity</th>
            <th width="20%">Price</th>
            <th width="20%">Total</th>
            <th width="25%">Action</th>
            </tr>
          </thead>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total= 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values){
                       
                        echo "<tr>";
	                        echo   "<td>".$values['product_name']."</td>";
                          echo "<td><input type='text' name='quantity[]' id='quantity".$values["product_id"]."' value='".$values["product_quantity"]."' data-product_id='".$values["product_id"]."' class='form-control input-sm text-center quantity' /></td> ";
	                        echo   "<td>".$values['product_price']."</td>";
	                        echo   "<td>".number_format($values["product_quantity"]*$values["product_price"],2)."</td>";
	                        echo   " <td><button name='delete' class='btn btn-danger btn-sm delete' id='".$values["product_id"]."'>Remove</button></td>";
                           
                        echo "</tr>";
                       
                         $total=$total+($values["product_quantity"]*$values["product_price"]); 
                        
                    }
                    
                    echo "<tr>";
	                    echo   "<td colspan='3' text-align='right'>Total</td>";
	                    echo  "<td colspan='2' text-align='right'>Rs:".number_format($total,2)."</td>";                        
                    echo "</tr>";

                     echo "<tr>";
                        echo "<td colspan='5' align='center'> 
                              <form method='post' action='cart.php'>  
                                   <input type='submit' name='place_order' class='btn btn-warning' value='Place Order' />  
                              </form>  
                         </td> "; 
                    echo "</tr>";
    
                }
            ?>
            
        </table>
    	</div>
  	</div>

</div>
</body>
</html>

<script>  
 $(document).ready(function(data){  
      $('.addToCart').click(function(){  
           var product_id = $(this).attr("id");
           console.log(product_id);  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>