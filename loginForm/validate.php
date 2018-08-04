<?php
// Starting session
session_start();
?>
<html>

    <body>
        <?php
            //If user has pressed log in button
            if(isset($_REQUEST['login'])){
                $userEnteredForm = stripslashes($_REQUEST["signinname"]);
                $userEnteredPassword = stripslashes($_REQUEST["signinpassword"]);
                $userEnteredPassword = md5($userEnteredPassword);
                $rememberMe = ($_REQUEST['remember']);
                $query = "SELECT * FROM users WHERE (username = '$userEnteredForm'
                    AND password = '$userEnteredPassword')
                ";
                $servername = "localhost";
                $username = "phpmyadmin";
                $password = "";
                $dbname = "mydb";
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $result = mysqli_query($conn , $query);
                $rows = mysqli_num_rows($result);
                if($rows == 1){
                    
                    if($_REQUEST["remember"]){
                        $_SESSION["firstname"] = "$userEnteredForm";
                        header("location: welcome.php");
                    }
                    else{
                        echo "we recognize you";
                        session_destroy();
                    }
                }
                else{
                    echo "please register yourself";
                    echo "Click here to <a href='Signup.php'>Login</a>";
                }
            }
            else{
                session_destroy();
                header("location: Signin.php") ;
            }
        ?>

    </body>
</html>