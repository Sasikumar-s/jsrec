<!DOCTYPE html>
<html lang="en">

<head>
  <?php
$conn=mysqli_connect('127.0.0.1','root','','jsrec');
if (isset($_POST['submit'])) 
{
  $m1=$_POST['m1'];
  $m2=$_POST['m2'];
  $m3=$_POST['m3'];
  $m4=$_POST['m4'];
  $m5=$_POST['m5'];
  $m6=$_POST['m6'];
  $m7=$_POST['m7'];
  $m8=$_POST['m8'];
  $t1=$_POST['t1'];
  $t2=$_POST['t2'];
  $t3=$_POST['t3'];
  $t4=$_POST['t4'];
  $t5=$_POST['t5'];
  $t6=$_POST['t6'];
  $t7=$_POST['t7'];
  $t8=$_POST['t8'];
  $w1=$_POST['w1'];
  $w2=$_POST['w2'];
  $w3=$_POST['w3'];
  $w4=$_POST['w4'];
  $w5=$_POST['w5'];
  $w6=$_POST['w6'];
  $w7=$_POST['w7'];
  $w8=$_POST['w8'];
  $tu1=$_POST['tu1'];
  $tu2=$_POST['tu2'];
  $tu3=$_POST['tu3'];
  $tu4=$_POST['tu4'];
  $tu5=$_POST['tu5'];
  $tu6=$_POST['tu6'];
  $tu7=$_POST['tu7'];
  $tu8=$_POST['tu8'];
  $f1=$_POST['f1'];
  $f2=$_POST['f2'];
  $f3=$_POST['f3'];
  $f4=$_POST['f4'];
  $f5=$_POST['f5'];
  $f6=$_POST['f6'];
  $f7=$_POST['f7'];
  $f8=$_POST['f8'];
  $s1=$_POST['s1'];
  $s2=$_POST['s2'];
  $s3=$_POST['s3'];

  $sql="INSERT INTO cse_timetable(m1,m2,m3,m4,m5,m6,m7,m8,t1,t2,t3,t4,t5,t6,t7,t8,w1,w2,w3,w4,w5,w6,w7,w8,tu1,tu2,tu3,tu4,tu5,tu6,tu7,tu8,f1,f2,f3,f4,f5,f6,f7,f8) VALUES('$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$w8','$tu1','$tu2','$tu3','$tu4','$tu5','$tu6','$tu7','$tu8','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8')";
  if(mysqli_query($conn,$sql))
  {
    echo "<script> alert('Your data  stored')</script> ";
  }
  else
  {
    echo "Data not save" . mysqli_error($conn);
  }
mysqli_close($conn);
}
?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JSREC</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 100%;
}
    
  </style>


</head>

<body>
<header id="header" class="fixed-top header-transparent" style="background: #03A9F4;">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><img src="assets\img/jay-fin.png" style="position: fixed;
    right: 930px;"></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">Attendence</a></li>
          <li><a href="facultyinformation.html">Faculty details</a></li>

          <li class="active"><a href="studentinfoo.php">Student details</a></li>
          
          <li><a href="team.php" class="active" >Timetable</a></li>
          <li><a href="blog.html">Result</a></li>
          <li class="drop-down"><a href="">Department</a>
            <ul>
                  <li><a href="#">CSE</a></li>
                  <li><a href="#">CIVIL</a></li>
                  <li><a href="#">MECH</a></li>
                  <li><a href="#">EEE</a></li>
                  <li><a href="#">ECE</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Event</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Time Table</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Time Table</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <table border="5" cellspacing="0" align="center" style="width: 80%;height: auto;">
    <tr>
  <th colspan="12" >
          <center><h1>TIME TABLE</h1></center>

    <label style="position:relative;right:383px;top:-15px;">Year:</label><br>
        <label style="position:relative;right:400px;bottom:-25px;">Semester:</label><br>
            <label style="position: relative;right:411px;bottom:20px;">Department:</label><br>
  </th><br> 

    </tr>
    <tr>
      <td align="center" height="50" width="100"><br>
        <b>Day/Period</b><br></td>
        <td align="center"height="50" width="100">
          <b>I<br>9:10-10:00</b>

        </td>
                <td align="center"height="50" width="50px" >
          <b>II<br>10:00-10:50</b></td>

                <td align="center"height="50" width="50" >
          <b><br>10:50-11:00</b></td>
                <td align="center"height="50" width="50" >
          <b>III<br>11:00-11:50</b></td>
                <td align="center"height="50" width="100" >
          <b>IV<br>11:50-12:40</b></td>
                <td align="center"height="50" width="100" >
          <b><br>12:40-1:10</b></td>
                <td align="center"height="50" width="100" >
          <b>V<br>1:10-2:00</b></td>
                <td align="center"height="50" width="100" >
          <b>VI<br>2:00-2:50</b></td>
                <td align="center"height="50" width="100" >
          <b><br>2:50-3:00</b></td>
                <td align="center"height="50" width="100" >
          <b>VII<br>3:00-3:50</b></td>
                <td align="center"height="50" width="100" >
          <b>VIII<br>3:50-4:20</b></td>

    </tr>
    <tr>
      <td align="center" height="50"><b>Monday</b></td>
      <td align="center" height="50"><input type="text" name="m1" style="border: none;outline: none;" > </td>
            <td align="center" height="50"><input type="text" name="m2" style="border: none;outline: none;" ></td>
            <td rowspan="6" align="center" height="50"><h2>B<br>R<br>E<br>A<br>K<br></h2></td>
      <td align="center" height="50"><input type="text" name="m3" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="m4" style="border: none;outline: none;" ></td>
       <td rowspan="6" align="center" height="50"><h2>L<br>U<br>N<br>C<br>H<br></h2></td>
       <td align="center" height="50"><input type="text" name="m5" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="m6" style="border: none;outline: none;" ></td>
       <td rowspan="6" align="center" height="50"><h2>B<br>R<br>E<br>A<br>K<br></h2></td>
         <td align="center" height="50"><input type="text" name="m7" style="border: none;outline: none;" ></td>
          <td align="center" height="50"><input type="text" name="m8" style="border: none;outline: none;" ></td>
      </tr>


          <tr>
      <td align="center" height="50"><b>Tuesday</b></td>
      <td align="center" height="50"><input type="text" name="t1" style="border: none;outline: none;" ></td>
             <td align="center" height="50"><input type="text" name="t2" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="t3" style="border: none;outline: none;" ></td>
       <td align="center" height="50"><input type="text" name="t4" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="t5" style="border: none;outline: none;" ></td>
         <td align="center" height="50"><input type="text" name="t6" style="border: none;outline: none;" ></td>
          <td align="center" height="50"><input type="text" name="t7" style="border: none;outline: none;" ></td>
           <td align="center" height="50"><input type="text" name="t8" style="border: none;outline: none;" ></td>

      </tr>

       <tr>
      <td align="center" height="50"><b>Wednesday</b></td>
      <td align="center" height="50"><input type="text" name="w1" style="border: none;outline: none;" ></td>
             <td align="center" height="50"><input type="text" name="w2" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="w3" style="border: none;outline: none;" ></td>
       <td align="center" height="50"><input type="text" name="w4" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="w5" style="border: none;outline: none;" ></td>
         <td align="center" height="50"><input type="text" name="w6" style="border: none;outline: none;" ></td>
          <td align="center" height="50"><input type="text" name="w7" style="border: none;outline: none;" ></td>
           <td align="center" height="50"><input type="text" name="w8" style="border: none;outline: none;" ></td>

      </tr>

            <tr>
      <td align="center" height="50"><b>Thursday</b></td>
      <td align="center" height="50"><input type="text" name="tu1" style="border: none;outline: none;" ></td>
             <td align="center" height="50"><input type="text" name="tu2" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="tu3" style="border: none;outline: none;" ></td>
       <td align="center" height="50"><input type="text" name="tu4" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="tu5" style="border: none;outline: none;" ></td>
         <td align="center" height="50"><input type="text" name="tu6" style="border: none;outline: none;" ></td>
          <td align="center" height="50"><input type="text" name="tu7" style="border: none;outline: none;" ></td>
          <td align="center" height="50"><input type="text" name="tu8" style="border: none;outline: none;" ></td>

      </tr>


      <tr>
      <td align="center" height="50"><b>Friday</b></td>
      <td align="center" height="50"><input type="text" name="f1" style="border: none;outline: none;" ></td>
             <td align="center" height="50"><input type="text" name="f2" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="f3" style="border: none;outline: none;" ></td>
       <td align="center" height="50"><input type="text" name="f4" style="border: none;outline: none;" ></td>
      <td align="center" height="50"><input type="text" name="f5" style="border: none;outline: none;" ></td>
         <td align="center" height="50"><input type="text" name="f6" style="border: none;outline: none;" ></td>
          <td align="center" height="50"><input type="text" name="f7" style="border: none;outline: none;" ></td>
       <td align="center" height="50"><input type="text" name="f8" style="border: none;outline: none;" ></td>

      </tr>


      <tr>
      <td align="center" height="50"><b>Saturday</b></td>
      <td  colspan="2" align="center" height="50"><input type="text" name="s1" style="border: none;outline: none;" ></td>
      <td colspan="2" align="center" height="50"><input type="text" name="s2" style="border: none;outline: none;" ></td>
            <td  colspan="2" align="center" height="50"><input type="text" name="s3" style="border: none;outline: none;" ></td>
      <td colspan="2" align="center" height="50"><input type="text" name="" style="border: none;outline: none;" ></td>

      </tr>
    </table>
  
        

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
  <input type="submit" name="submit" value="Upload">

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        





        
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">







        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>JSREC</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="#">AZTEC</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>