<?php
	include_once 'header.php';
	 include 'dbh.inc.php';
?>

    <div id="container">
    <?php	
      $sql = "SELECT * FROM prod";
$result = $conn->query($sql);
echo "<center><h1 style='color:green; font-size:40px; inline-height:40px;'>PRODUCTS</h1></center>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      
       echo "<hr>"; 

        echo "<div id='ak2'><img src='product_images/".$row['prd_img']."' height='130' width='150' ><br></div>";  

        echo "<div id='ak4'><b>Product: </b>" . $row["prd_name"]. "<br>"."<b>Quantity:</b> " . $row["prd_quant"] . "<br>"."<b>Price </b>" . $row["prd_price"] ."<br>"."<b>Description:</b> " . $row["prd_desc"] ."</br>"."</div>"  ;
     

      echo "<div id='ak3'><h1 style='text-align:right; '><b>Name:</b> " . $row["name"]."</br>" ."<b>Contact Number: </b>" . $row["mobile"]."</br>" . "<b>Email: </b>" . $row["email"]."</br><b></center></h1></div>";


  //   	echo "<button onClick=info() class='dropbtn'>click for info</button>";
     echo "<br><br>"; 
     echo "<br><br>";	
     echo "<br><br>"; 
     echo "<br><br>"; 
     echo "<br><br>"; 


    }
} else {
    echo "0 results";
}
echo "</div>";

$conn->close();
?>
      


    </div>
</body>
