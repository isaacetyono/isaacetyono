<?php
    session_start();
   $con = mysqli_connect('localhost', 'root', 'root1234', 'gloshpol');
   if(isset($_POST['submit']))
   {
    
    $v1=$_POST['Firstname'];
    $v2=$_POST['Lastname'];
    $v3=$_POST['Username'];
    $v4=$_POST['Email'];
    $v5=$_POST['Passwordw'];
    $v6=$_POST['Phonenumber'];
    $QUERY="INSERT INTO policetb(Firstname ,Lastname ,Username,Email,Passwordw,phonenumber)VALUES('$v1','$v2','$v3','$v4','$v5','$v6')";
    
    if(mysqli_query($con,$QUERY)){
       

            echo "reistered successful successfully";
    }
    else {
        echo "failed";
    }
   }
   

    ?>