<?php
$conn=mysqli_connect('localhost','root','','collegedb');
if (isset($_POST['submit'])) 
{
  $studentname=$_POST['studentname'];
#$file = addslashes(file_get_contents($_FILES["profile"]["tmp_name"]));  
$rollno=$_POST['rollno'];
$registerno=$_POST['registerno'];
$degree=$_POST['degree'];
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


  $sql="INSERT INTO studentinfo(`id`, `studentname`, `rollno`, `registerno`, `degree`, `department`, `email`, `enrolledon`, `dob`, `bloodgroup`, `mobileno`, `address`, `city`, `aadharno`, `community`, `quota`, `dayhostler`, `busno`, `firstgraduate`, `medium`, `fathername`, `mothername`, `pmobileno`, `schoolname`, `cuttoff`) VALUES (NULL, $studentname, $rollno, $registerno, $degree, $department, $email, $enrolledon, $dob, $bloodgroup, $mobileno, $address, $city, $aadharno, $community, $quota, $dayshostler, $firstgraduate, $medium, $fathername, $mothername, $pmobileno, $schoolname, $cuttoff)";

  if(mysqli_query($conn,$sql))
  {
    echo " your aztec account was created succesfully  for your shop";
    header("Location:home1.php");

  }
  else
  {
    echo "Data not save" . mysqli_error($conn);
  }
mysqli_close($conn);
}
?>
