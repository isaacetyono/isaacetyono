<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root1234","gloshpol");
if(isset($_POST["add"]))
{
    if(isset($_SESSION["policepic"]))
    {
          $item_array_id = array_column($_SESSION["policepic"], "item_id");
          if(!in_array($_GET["id"], $item_array_id)){
             $count = count($_SESSION["policepic"]);
             $item_array = array(
                'item_id'  => $_GET["id"],
                'item_name' => $_POST["location"],
                'item_p' => $_POST["date"],
                'item_q' => $_POST["condtion1"],
                'district' => $_POST["district"],
            );
            $_SESSION["policepic"][$count] = $item_array;
          }
          else{
            echo '<script>alert("incindent already reported")</script>';
          }
        }  
    else{
        $item_array = array(
            'item_id'  => $_GET["id"],
            'item_name' => $_POST["location"],
            'item_p' => $_POST["district"],
            'item_q' => $_POST["date"],
        );
        $_SESSION["policepic"][0] = $item_array;
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>police station homepage</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link href="all.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style11.css" />
	<link rel="stylesheet" type="text/css" href="style4.css" />
        

        <script src="js1.js" type="text/javascript"></script>
        
       
    
    </head>
    <body>
   
      <div class="head1"><h1>POLICE <span>MONITORING PAGE</span></h1></div>
      
     
      <div class="head3">
        <a href="index.php"><img src="police.jpg" alt="" width="50px" height="50px" class="h3"></a></div><br/>
       <div class="hhh">
        <h2>NOACCDTS RECORDED</h2>
        <?php
      $conn = mysqli_connect("localhost", "root", "root1234","gloshpol");
      $query1 = "SELECT policeid FROM REPORT ORDER BY policeid ";
      $query_run = mysqli_query($conn, $query1);
      $row1 = mysqli_num_rows($query_run);
      echo '<h1>'.$row1.'</h1>'
      ?></div>
        <br/>
        <?php
        $query = "SELECT * FROM REPORT ORDER BY policeid ASC";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
       
        <form class="form-container" action="headoffices.php" method="post" ><br/><br/>
   
<div class="con">

     <div class="condition1"><span>CURRENT SITUATION:</span><h1><?php echo $row["happenings"]; ?></h1></div>
     <div class="ct"> <img src="./reportpic/<?php echo $row["incidentpic"]; ?> " width="500px" height="500px"></div>
      <input type="hidden" name="condition" value="<?php echo $row["incidentpic"]; ?>" />
      <div class="product-info">
      <div class="tt"></div>  
        <div class="product-price">
   <div class="location"> <h4> <?php echo $row["location"]; ?></h4></div>
        <input type="hidden"  class="new" name="location" value="<?php echo $row["location"]; ?>" /></div><br/>
        <div class="district"> <h4> <?php echo $row["district"]; ?></h4></div>
        <br/><input type="hidden"  class="new" name="district" value="<?php echo $row["district"]; ?>" /></div><br/>
        <div class="date"> <h4> <?php echo $row["dateandtime"]; ?></h4></div>
        <br/><input type="hidden"  class="new" name="date" value="<?php echo $row["dateandtime"]; ?>" /></div>
        
        
       
      </div>
    </div>
 
   
<div class="form-popup" id="myForm" >

  </form>
</div>



 </div>
</form>
<?php
            }
        }
?>

    <?php

    ?>
    <?php
$db = mysqli_connect("localhost", "root", "root1234", "gloshpol");


?>
<br/>
<br/>
    <div id="display-image">
    <table class="styled-table">
    <div class="styled-table"><h1>POLICE RECORD TABLE</h1></div>
    <thead>
        
        <tr>
		   <th>policeid</th>
            <th>REPORTER NAME</th>
            <th>TEL NO</th>
			<th>CONDITION</th>
			<th>REPORTER DISTRICT</th>
      <th>DELETE RECORD</th>
        </tr>
		</thead>
		<?php
		if(isset($_GET['policeid'])){
	        $policeid = $_GET['policeid'];
	        $delete = mysqli_query($db, "DELETE FROM report WHERE policeid='$policeid'");
			
		}
		
		$query = " SELECT * FROM report ";

		$result = mysqli_query($db, $query);
		$num = mysqli_num_rows($result);
		if($num>0){

		while ($data = mysqli_fetch_assoc($result)) {
		
          echo "
        <tr>
            <td>".$data['policeid']."</td>
            <td>".$data['reporter']."</td>
		      	<td>".$data['reporternumber']."</td>
            <td>".$data['happenings']."</td>
			
      <td>".$data['district']."</td>
      <td> 
			<a href='headoffices.php?policeid=".$data['policeid']."' class='btn' >Delete</a>
			
			</td>
        </tr>
    
		  ";
		}
		} ?>   
    </table>
	</div>



    </body>
</html>