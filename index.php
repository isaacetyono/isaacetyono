<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$_cond = $_POST["reporter"];
	$_reporter = $_POST["reporternumber"];
	$_hap = $_POST["happenings"];
	$image = $_FILES["uploadfile"]["name"];
	$_image = $_FILES["uploadfile"]["tmp_name"];
	$_loc = $_POST["location"];
	$_t = date("Y-m-d h:i:sa");
	$_district = $_POST["district"];
	$folder = "./reportpic/" . $image;
	

	$db = mysqli_connect("localhost", "root", "root1234", "gloshpol");

	// Get all the submitted data from the form
	$sql1 = "INSERT INTO report(reporter,reporternumber,happenings,incidentpic,location,dateandtime,district) VALUES ('$_cond','$_reporter','$_hap','$image','$_loc','$_t','$_district')";

	// Execute query
	mysqli_query($db, $sql1);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($_image, $folder)) {
		echo "<h3> your case has been reported successfully. thank you for your concern!</h3>";
	} else {
		echo "<h3> failed to report incident.please fill in all details!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style11.css" />
	<link rel="stylesheet" type="text/css" href="style4.css" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
</head>

<body>
<div class="content1"><h1>REPORTER HOME <a href="lll.php">P</a>AGE</h1></div>
<marquee direction="right"><p>you are most pleased to have you here please report your accident by filling in the details in the form</p></marquee>
<marquee direction="left"><p>your concern is our priorty</p></marquee>
<div id="content">
	<h1>PLEASE FILL IN THE DETAILS BELOW</h1>
	
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
			<select name="district" id="district-list" class="inputbox">

<option value disabled selected>Select district</option>
<option value="MBARARA" >MBARARA</option>
<option value="MBALE" >MBALE</option>
<option value="KAPCHORWA" >KAPCHORWA</option>
<option value="LIRA" >LIRA</option>
<option value="SOROTI" >SOROTI</option>
</select>
<h5>NAME OF THE REPORTER:</h5>
			<input type="text" name="reporter" value="" placeholder="enter name of the reporter here"/><br/><br/>
			<h5>TELEPHONE NUMBER:</h5>
			<input type="text" name="reporternumber" value="" placeholder="ENTER phonenumber here"/><br/><br/>
			<h5>IMMEDIATE HAPPENING:</h5>
			<input type="text" name="happenings" value="" placeholder="current condition"/><br/><br/>

			<h5>Take a picture and upload it here:</h5>
				<input class="form-control" type="file" name="uploadfile" value="" /><br/><br/>
				<h5>location of the accident:</h5>
                <input type="text" name="location" value="" placeholder="enter location here" /><br/><br/>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">REPORT</button>
				
				
</form>
	</div>
	</div>
	
	<?php
$db = mysqli_connect("localhost", "root", "root1234", "gloshpol");


?>
<br/>
<br/>
    <div id="display-image">
    <table class="styled-table">
   <h1>POLICE RECORD TABLE</h1>
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