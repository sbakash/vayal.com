<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vayal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
    @font-face{
        font-family: Bamini;
        src:url(Bamini.TTF);
    }
    @font-face{
                font-family: Bamini;
                src: url(Bamini.TTF);
            }
            p{
                font-family: Bamini; 
            }
 .sale {

position: absolute;
top: 350px;
left:450px;
font-family: arial;

}
.sale button{
    background-color: #4CAF50;
    color: white;
    font-family: arial;
}
.buy {

position: absolute;
top: 350px;
right:450px;  
background-color:#4CAF50;
overflow: hidden;
font-family: arial;


    
}
.buy button{
    background-color: #4CAF50;
    color: white;
    font-family: arial;
}

.button1{
    height:45px;
    width:150px;
    
    
}
.background-wrap {
                position: fixed;
                z-index: -1000;
                width: 100%;
                height: 100%;
                overflow: hidden;
                top: 0;
                left: 0;
            }
            
            #video-bg-elem {
                position: absolute;
                top: 0px;
                left: 0;
                min-height: 100%;
                min-width: 100%;
                opacity:0.8;
            }
 .header img {
  float: left;
  width: 250px;
  height: 60px;
  position: relative;
  right: 250px;
  bottom: 10px;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 6px;
    font-size: 14px;
    border: none;
    cursor: pointer; 
    position: relative;
    top: 14px;
  
    left: 770px;

}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;

     
}

.dropdown-content {
    display: none;
    background-color: #f9f9f9;
    min-width: 70px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    position: relative;
    top: 14px;
  
    left: 770px;

}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
#container { 
    background: white;
    margin-right: 150px;
    margin-left: 150px;
    height: 890px;
width:1200px;

}
#ak2{

float:left;
margin-left: 30px;



}
#ak3{
float:right;
padding: 30px;
font-size: 20px;


}
#ak4{

float:left;
padding: 30px; 

font-size: 20px;
}




.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

</style>
<script type="text/javascript">
function log()
{
    if(header="Location: ../index.php?login=success");
}
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) { 
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function validateForm() {
    var x = document.forms["login"]["uid"].value;
    var y = document.forms["login"]["pwd"].value;
    if (x == ""&&y == "") {
        alert("enter username and password");  
        return false;
    }
}
</script>
</head>
<body>
    <div class="background-wrap">
            <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted"> 
                <source src="video.mp4" type="video/mp4">
                Video not supported
            </video>          
        </div>


<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <div class="header">
                    <a href="index.php">
                        
  <img src="untitled.jpg" alt="logo" /></a>
  
</div>
            </ul>
                <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Language</button>
  <div id="myDropdown" class="dropdown-content">
    <stlye font-family:"Bamini"><p><a href="saletamil.php">jkpo;</a></p></stly>   
        <a href="#about">हिंदी</a>
    <a href="#contact">తెలుగు</a>
  </div>
</div>
     <div class="nav-login">
         <?php
            if (isset($_SESSION['u_id'])) {
                echo    "You are logged in ";
            }
        ?>

                <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '<form action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                        </form>';
                    } else {
                        echo '<form name="login" action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="submit" onclick="return validateForm()">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>';
                    }
                ?>
            </div>
        </div>
    </nav>


</header>


