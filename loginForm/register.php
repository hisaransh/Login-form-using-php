<html>
    <body>
        <?php
            $servername = "localhost";
            $username = "phpmyadmin";
            $password = "";
            $dbname = "mydb";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            $name = stripslashes($_REQUEST["name"]);
            $email = stripslashes($_REQUEST["emailid"]);
            $password = stripslashes($_REQUEST["password1"]);
            $trn_date = date("Y-m-d H:i:s");
            
                $query = "
                    INSERT INTO users(username,email,password,trn_date) VALUES(
                        '$name' , '$email','".md5($password)."' , '$trn_date'
                    );
                ";
                if (mysqli_query($conn, $query)) {
                    echo "New record created successfully <br/>";
                    echo "<a href='Signin.php'> Please sign in </a>";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
        ?>
    </body>
</html>