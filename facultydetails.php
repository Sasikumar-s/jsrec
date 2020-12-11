<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed: " . mysql_connect_error());
}
if (isset($_POST['submit'])) 
{
	$facultyname=$_POST['facultyname'];
	#$file = addslashes(file_get_contents($_FILES["profile"]["tmp_name"]));  
			$facultyid=$_POST['facultyid'];
			$designation=$_POST['designation'];
				$dob=$_POST['dob'];
						$auid=$_POST['auid'];
							$address=$_POST['address'];
								$city=$_POST['city'];
									$pancardno=$_POST['pancardno'];
										$mobileno=$_POST['mobileno'];
											$dateofjoininng=$_POST['dateofjoininng'];

$sql = "INSERT INTO facultyinfo(id,facultyname,designation,dob,auid,address,city,pancardno,mobileno,dateofjoining)VALUES(NULL,'$facultyname','$designation','$dob','$auid','$city','$pancardno','$mobileno','$dateofjoininng')";

if (mysqli_query($conn,$sql)){
	echo "student details uploaded successfully";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>


?>