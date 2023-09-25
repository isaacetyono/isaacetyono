<?php
  $conn= mysqli_connect("localhost", "root", "root1234", "gloshpol");

    session_start();

   if( $_SERVER['REQUEST_METHOD']=='POST')
   {
    //echo("working")
    $v1=$_POST['email'];
    $v2=$_POST['password'];
    $sqlvar="SELECT * from policetb where Email='$v1' and Passwordw='$v2'";
    $result=$conn -> Query($sqlvar);
   }
    if($result-> num_rows> 0 ){
        header("location: headoffices.php");
   }
   else{
    echo"
    <script>alert('userid or password is not correct');</script>
   ";
}

    ?>