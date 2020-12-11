

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>faculty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="shared/style.css">
    <link rel="stylesheet" href="demo_1/style.css">
</head>
<style type="text/css">

.form-control {
    display: block;
    width: 88%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.56rem 1.375rem;
    font-size: 0.75rem;
    font-weight: 400;
    line-height: 1;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 2px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
input[type=text], input[type=password], select {
  width: 88%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body style="height: 1413px;">
<div class="col-md-6 grid-margin stretch-card" >
                <div class="card" style="width: 100%;min-width: 203%; ">
                  <div class="card-body"  style="width: 100%;  height: 1165px;">
                    <h4 class="card-title"> STUDENT INFO</h4>
                    <p class="card-description">uploade STUDENT details</p>
                        <form class="forms-sample" style="height: 100%" method="post" action="studentdetails.php">
                    <div class="row" style="padding-left:20px; width: 47%; ">
                    <div class="col-50" style="width: 50%;">
                      <div class="form-group">
                        <label for="exampleInputName1">Name:</label><br>
                        <input type="text" class="form-control"id="exampleInputName1" placeholder="Enter Your Name.." name="studentname">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Roll Number:</label><br>
                        <input type="text" class="form-control"id="exampleInputName1" placeholder="Enter Your Roll No.." name="rollno">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Register Number:</label><br>
                        <input type="number" class="form-control"id="exampleInputName1" placeholder="Enter Your Register No.." name="registerno">
                      </div>
                      <div class="form-group">
                        <label for="profile" >Profile PictureL</label>
                        <input type="file" name="profile" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Degree:</label><br>
                        <select id="degree" name="degree" class="form-control" style="width: 50%;">
                        <option value="BACHELOR OF ENGINEERING">BACHELOR OF ENGINEERING</option>
                        <option value="MASTER OF ENGINEERING">MASTER OF ENGINEERING</option>
                        <option value="MASTER OF BUSSINESS ADMINISTRATION">MASTER OF BUSSINESS ADMINISTRATION</option>
                        <option value="B.TECH FASHION TECHNOLOGY">B.TECH FASHION TECHNOLOGY</option>
                    </select>

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Department:</label><br>
                        <select id="dept" name="department" class="form-control"style="width: 88%;height: 48px;" required>
                          <option value="CSE">CSE</option>
                          <option value="ECE">ECE</option>
                          <option value="EEE">EEE</option>
                          <option value="MECH">MECH</option>
                          <option value="CIVIL">CIVIL</option>
                          <option value="FT">FT</option>
                      </select>

                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">E-mail AddressL</label><br>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Your E-mail.." name="email">
                      </div>
               
                      <div class="form-group">
                        <label for ="enrolled date">Enrolled On:</label><br>
                        <input type="date" id="edate" class="form-control"name="enrolledon"  placeholder="enrolled On.." required >
                      </div>
                      <div class="form-group">
                        <label for ="dob">Date of Birth:</label><br><br>
                        <input type="date" id="dob" name="dob"><br><br>
                      </div>
                        <div class="form-group">
                             <label for="blood group">Blood Group:</label>
                             <select id="blood group" name="bloodgroup">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                        </select><br>
                        </div>


                      <div class="form-group">
                        <label for ="Mobile No"> Mobile Number:</label><br>
                        <input type="number" id="mobileno" class="form-control"name="mobileno" maxlength="10" placeholder="Enter Your Mobile Number.." required  >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">School Name:</label><br>
                        <input type="text" class="form-control"id="exampleInputName1" placeholder=" Enter Your School Name.." name="schoolname">
                      </div>

                       <div class="form-group">
                        <label for ="Mobile No">Cutt-Off Mark:</label><br>
                        <input type="text" id="mobileno" class="form-control" name="cuttoff" maxlength="" placeholder=" Enter Your Cutt-Off Mark" required >
                      </div>
                      
                     </div>
                    </div>
                    <div class="row" style="width:50%; position: relative;left: 590px;bottom:985px;">

                    <div class="col-50"style="width:50%;">
                        <div class="form-group">
                        <label for="exampleTextarea1">Address:</label><br>
                        <input type="text" id="Mobile no" name="address" class="form-control"maxlength="10" placeholder="Enter Your Address" required >
                       </div>

                    <div class="form-group">
                        <label for ="city"> City:</label><br>
                        <input type="text" id="city" name="city" placeholder="Enter Your City.."><br>
                    </div>
                    <div class="form-group">
                        <label for ="Mobile No">Aadhar Number:</label><br>
                        <input type="text" id="aadharno" name="aadharno" class="form-control" maxlength="12" placeholder="Enter Your Aadhar No.." required>
                    </div>
                    <div class="form-group">
                        <label for ="community"> Community:</label><br>
                        <select id="community" name="community">
                            <option value="FC">FC</option>
                            <option value="BC">BC</option>
                            <option value="MBC">MBC</option>
                            <option value="BCM">BCM</option>
                            <option value="SC/ST">SC/ST</option>
                            <option value="OTHERS">Others</option>
                        </select>
                        </div><br>
                        <div class="form-group">
                        <label for ="Management/gov">Management/Government Quota:</label><br>
                             <input type="Radio" id="mq" name="quota" value="mq">MQ<br>
                             <input type="Radio" id="gq" name="quota" value="gq">GQ<br>
                         </div>
                    <div class="form-group">

                    <label for="daysscholar">Daysscholar/hostler:</label><br>
                    
                    </div>
                     <div class="form-group">
                        <input type="radio" id="dayscholor" name="daysshostler"onclick="myFunction()" value="HOSTLER">
                        <label for="hosteller">Hosteler</label><br>

                        <input type="radio" id="tamil" name="daysshostler" value="DAYSSCHOLAR" onclick="myFunction()">Days Scholar<br>

                        <label for="myCheck">Busno:</label><br>
                        <input type="textbox" id="busno" name="busno" placeholder="Enter Bus No.. "><br>
                         <script>
                        function myFunction() {
                          var checkBox = document.getElementById("dayscholor");
                          var text = document.getElementById("busno");
                          if (checkBox.checked == true){
                            text.disabled = true;
                          } 
                          else
                          {text.disabled = false;
                          }
                        }
                        </script><br>
                    </div>
                    <div class="form-group">
                       <label>  First Graduate:</label><br>
                      <input type="radio" id="Yes" name="firstgraduate" value="YES">Yes<br>
                      <input type="radio" id="no" name="firstgraduate" value="NO">No<br>
                    </div>
                      <div class="form-group">
                        <label>Medium of Study:</label><br>
                              <input type="radio" id="english" name="medium" value="ENGLISH">English<br>
                              <input type="radio" id="tamil" name="medium" value="TAMIL">Tamil<br>
                      </div>
                    <div class="form-group">
                        <label for ="Mobile No">Father's Name:</label><br>
                        <input type="text" id="cuttoff1" class="form-control" name="fathername"  placeholder="Enter Your father Name.." required >
                      </div>
                       <div class="form-group">
                        <label for="leaving">Mother's Name</label><br>
                        <input type="text" id="mothername" class="form-control" name="mothername" required placeholder="Enter Your mother Name.."><br>
                       </div>
                       <div class="form-group">
                        <label for ="Mobile No">Parent Mobile Number:</label><br>
                        <input type="text" id="Mobile no" class="form-control"name="pmobileno" maxlength="10" placeholder="Enter Parent Mobile No.." required >
                      </div>
                      <style type="text/css">
                        .button1{
                            background-color: #03a9f4; /* Green */
                            border: none;
                            color: white;
                            padding-left: 20px;
                            padding-top: 7px;
                            padding-right: 20px;
                            padding-bottom: 7px;
                            border-radius: 8px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                        }
                        </style>
                </div>
<button class="button1" value="submit" name="submit" style="position: fixed;left:74%;top: 78%;">UPLOAD</button>

            </div>

        </form>
        </div>
    </div>
</div>
</body>
</html>
