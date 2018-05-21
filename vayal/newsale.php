
<?php
//$r = $_GET["tn"];
//if(!$_GET["tn"])
//{
 // header("location:login.html");
//  }

  include 'dbh.inc.php';
   ?>




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
    <form class='sell-form' action='' method='POST' enctype='multipart/form-data'>
          
            
              <input type='text' name='product_name' required placeholder='Enter product Name'> 
          

            
              
              <input type='text' name='product_quantity' placeholder='Enter quantity available'  />
              
            
            
              
              <input type='text' name='product_price' placeholder='Enter the price' required />
            
             
             <textarea name='product_description'placeholder='Enter description of product' cols='53' rows='7' required></textarea><br>
       
              
              <input type='file' name='product_image' required></br>
         
            <button type='submit' name='index'>Upload</button>
              
            
      
</form>    
    </section>";
}

else{


echo "<center><h1 style='color:white; margin-top:80px; font-size:30px;'>please sign in to continue!!!!!</h1></center>";


}


?>
</body>
</html>


<?php


if(isset($_POST['index'])){

    //getting text data
   $product_name = $_POST['product_name'];
   $user_id=$_SESSION['u_id'];
   $product_quantity = $_POST['product_quantity'];
   $product_price = $_POST['product_price'];
   $product_description = $_POST['product_description'];
     $name=$_SESSION['u_first'];
    $mobile=$_SESSION['u_mobile']; 
    $email=$_SESSION['u_email'];
    $mobile2=$_SESSION['u_uid'];
    //getting image data
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp = $_FILES['product_image']['tmp_name'];
   
   move_uploaded_file($product_image_tmp,"product_images/$product_image");
   
   $insert_product = "insert into prod(prd_name,prd_quant,prd_price,prd_desc,prd_img,Userid,name,mobile,email) values ('$product_name',' $product_quantity','$product_price','$product_description','$product_image','$user_id','$name',' $mobile','$email')";
   
   $run_product = mysqli_query($conn,$insert_product);
   
   if($run_product){
   
   echo"<script>alert('Product Has been inserted')</script>";
   echo"<script>window.open('index.php?tn=$r','_self')</script>";
   }
   else
    {
   
   echo"<script>alert('Product not inserted')</script>";
 }


}


?>