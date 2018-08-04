
<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    </head>
    <script type="text/javascript">
    function validate(){
        var new_name = document.forms["signupform"]["name"].value;
        var new_email = document.forms["signupform"]["emailid"].value;
        var new_password1 = document.forms["signupform"]["password1"].value;         
        var new_password2 = document.forms["signupform"]["password2"].value;
        var name_error = document.getElementById('name_error');
        var email_error = document.getElementById('email_error');
        var password_error = document.getElementById('password_error');
         //Name field should not be empty
         if(new_name == ""){
                name_error.innerHTML = "Name feild is Necessary";
                return false;
            }
            var length = new_name.length;
            //Name feild should not contain numbers
            for(var i = 0;i<length;i++)
            {
                if(new_name[i] == " "){
                    continue;
                }
                else if(new_name[i] >=0 && new_name[i] <=9)
                {
                    name_error.innerHTML = "Name feild can't contain numbers";
                    return false;
                }
            }
            //Email should compulsary have  [ '@' , '.' ] in order
            var flag1 = false;
            var flag2 = false;
            length = new_email.length;
            for(var i = 0;i<length;i++)
            {
                if(new_email[i] == '@'){
                    flag1 = true;
                    i++;
                    while(i<length)
                    {
                        if(new_email[i] == "."){
                            flag2 = true;
                        } 
                        i++;   
                    }
                }
                
            }
            if(flag1 == false || flag2 == false){
                    email_error.innerHTML  = "Pleade provide email id in format --  abc@xyz.com";
                    return false;
            }
            length = new_password1.length;
            if(length<8)
            {
                password_error.innerHTML = "Length of password shoud be greater then 8";
                return false;
            }
            //Both the password feild should be same
            if(new_password1 != new_password2)
            {
                password_error.innerHTML =  "Both Password field should be same";
                return false;
            }
    }
</script>
    <body>
        <h1> Welcome New User</h1>

        <br/>

        <form id="signup" onsubmit='return validate()' action='register.php' method='post'  name='signupform'>
            <label>Name</label>
            <input type="text" name="name" autofocus id='name' />
            <div id='name_error' style="color:red;margin-top:10px;">
                </div>
            <br>
            <label>Email Id</label>
            <input type="text" name="emailid" id='email' />
            <div id='email_error' style="color:red;margin-top:10px;"> </div>
            <br>
            <label>Password</label>
            <input type="password" name="password1" id='password1' />
            <br>
            <p> </p>
            <label>Confirm-Password</label>
            <input type="password" name="password2" id='password2' />
            <br>
            <div id='password_error' style="color:red;margin-top:10px;"> </div>
            <input type="submit"  class="myButton" id='submit' />
        </form>
        <feildset>
            <a href='Signin.php'><button class="myButton">Already a User Sign In!! </button> </a>
        </feildset>
    </body>
</html>


