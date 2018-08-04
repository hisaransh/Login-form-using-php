<?php
session_start();
session_destroy();
?>

<html>
    <head>
        <title>Log out</title>
</head>
<body>
    <?php
    header("location: Registration.php");
    ?>
    </body>
</html>