<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "collegedb";

try{

	$conn = new PDO('mysql:host=$servername;$dbname=collegedb',$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


if (isset($_POST['submit'])) 
{
$studentname = $_POST['studentname'];
#$file = addslashes(file_get_contents($_FILES["profile"]["tmp_name"]));  
$rollno = $_POST['rollno'];
$registerno = $_POST['registerno'];
$degree = $_POST['degree'];
$department = $_POST['department'];
$email = $_POST['email'];
$enrolledon = $_POST['enrolledon'];
$dob = $_POST['dob'];
$bloodgroup = $_POST['bloodgroup'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];
$city = $_POST['city'];
$aadharno = $_POST['aadharno'];
$community = $_POST['community'];
$quota = $_POST['quota'];
$dayshostler = $_POST['dayshostler'];
$firstgraduate = $_POST['firstgraduate'];
$medium = $_POST['medium'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$pmobileno = $_POST['pmobileno'];
$schoolname = $_POST['schoolname'];
$cuttoff = $_POST['cuttoff'];

	$sql = "INSERT INTO studentinfo(studentname , rollno , registerno , degree , department , email , enrolledon , dob , bloodgroup , mobileno , address , city , aadharno , community , quota , dayshostler , firstgraduate ,  medium , fathername , mothername , pmobileno , schoolname , cuttoff , id ) VALUES ( `$studentname` ,`$rollno`,`$registerno`,`$degree`,`$department`,`$email`,`$enrolledon`,`$dob`,`$bloodgroup`,`$mobileno`,`$address`,`$city`,`$aadharno`,`$community`,`$quota`,`$dayshostler`,`$firstgraduate`,`$medium`,`$fathername`,`$mothername`,`$pmobileno`,`$schoolname`,`$cuttoff`,NULL)";


	$conn->exec($sql);
	echo  " New record craeted successfully";

}
}
catch(PDOException $e){
	echo $sql . "<br>". $e->getMessage();
}

$conn = null;
?>


























