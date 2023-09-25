<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>police login page</title>
    <link href="Style4.css" rel="stylesheet" />
</head>
<body>
   
<div class="content">
       <form action="ready.php" method = "post" name="form1">
        <h1>LOGIN</h1>
        <div class="text1"> <div class="wakimg"><img src="police.jpg" alt=""/></div>
        <div class="txt_field">

            <input type="text" placeholder="Enter your email" aria-label="email" name="email"><span></span>
            <h4 class="t"> Email</h4></div>
            <div class="txt_field">
            <input type="text" placeholder="password" aria-label="password" name="password" ><span></span>
              <h4  class="t">Password</h4> <br></div>
            <p>By logging in, you acknowledge that you agree to our <a href="#">terms and conditions</a></p>
            <button id="btn2" name="login">Login</button><br>
            
            <div id="text2"> <p><a href="Register.php"> Register instead</a></p></div><br>
        </div>
       </form>
       
        </div>
</body>
</html>