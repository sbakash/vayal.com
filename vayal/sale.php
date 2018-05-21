<?php
	include_once 'header.php';
    include 'dbh.inc.php';
?>
<style type="text/css">
.sell-form {
    width: 400px;
    margin: 0 auto;
    padding-top: 30px;
    text-align: center;
    font-size: 18px;
}

.sell-form input {
    width: 90%;
    height: 40px;
    padding: 0px 5%;
    margin-bottom: 4px;
    border: none;
    background-color: #fff;
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 40px;
    text-align: center
}

.sell-form button {
    display: block;
    margin: 0 auto;
    width: 30%;
    height: 40px;
    border: none;
    background-color: #222;
    font-family: arial;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
}

.sell-form button:hover {
    background-color: #111;
}
</style>


<?php


if(isset($_SESSION['u_id'])){

echo  "<section class='main-container'>
	<div class='main-wrapper'>
		<h2>Sell</h2>
		<form class='sell-form' action='' method='POST' enctypr='multipost/form/data'>
			<input type='text' name='pname' placeholder='Enter product Name'>
			<input type='text' name='pquantity' placeholder='Enter quantity available'>
            <input type='text' name='price' placeholder='Enter the price'>
			<input type='text' name='description' placeholder='Enter description of product'>
			<input type='file'  placeholder='product_image' name= 'product_image' required>
			<button class='sell-form' type='submit' name='index'>Upload</button>
		</form>
	</div>
</section>";
}

else{


echo "<center><h1 style='color:white; margin-top:80px; font-size:30px;'>please sign in to continue!!!!!</h1></center>";


}



?>
<?php


if(isset($_POST['index'])){

    //getting text data
   $u_id=$_SESSION['u_id'];
   $pname = $_POST['pname'];
   $pquantity = $_POST['pquantity'];
   $price = $_POST['price'];
   $description = $_POST['description'];
   //$product_image = $_POST['product_image'];
   
  
  
   
    //getting image data
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp = $_FILES['product_image']['tmp_name'];
   
   //move_uploaded_file($product_image_tmp,"product_images/$product_image");
   
    $sql = "INSERT INTO product(user_first,product_name,product_quantity,product_price,product_description,picture) VALUES ('$u_id','$pname','$pquantity','$price','$description','$product_image)";
   
   $run_product = mysqli_query($conn,$sql);
   
   if($run_product){
   
   echo"<script>alert('Product Has been inserted')</script>";
   echo"<script>window.open('index.php?tn=$r','_self')</script>";
   }


}


?>


<?php
	include_once 'footer.php';
?>
