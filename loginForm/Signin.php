<html>
<head>
        <title>Sign in</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
    <h1> Welcome Back </h1>
    <form id="signin" action='validate.php' method='post'>
            <label>Name</label>
            <input type="text" name="signinname" autofocus require />
            </br>
            <label>Password</label>
            <input type="password" name="signinpassword" require/>
            </br>
            <label>Remember me </label>
            <input type="checkbox" name='remember' />
            </br>
            <input type="submit"  class="myButton" name="login" />
        </form>   
           <a href='Signup.php'><button class="myButton">New User Sign Up!! </button> </a>        
</body>

</html>