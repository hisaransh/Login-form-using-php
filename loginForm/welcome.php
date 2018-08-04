<?php
// Starting session
session_start();
?>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        
    </head>
    
    <body>
        <?php
            if(isset($_SESSION["firstname"])){
            echo 'hii '.$_SESSION["firstname"];
            echo "</br> Want to log out";
            echo "<a href='Logout.php'><button class='myButton'>Log out </button> </a>";
        }else{
            header("location: Signin.php");
        }
        ?> 
       
        
    </body>
</html>