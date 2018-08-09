<!Doctype html>
<html>


<head>
       <title> GDGU OD Form </title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<?php

//CSS file loaded
include 'odcss.html' ;

//php script for data recieved to a txt filr
include 'backendod.php' ;

?>
<!-- ..................................CSS added to this form............................. -->
<meta charset="Courier">

<body>


     <h1>
    <img src="http://skilloutlook.com/wp-content/uploads/2016/05/GD-Goenak-BEd-Notification.jpg"  style="width:500px;height:175px;">
  </h1>




<h2>  Apply for On-Duty Attendence  </h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 First Name:  <input type= "Name" name="firstname" required >
 Last Name:  <input type= "Name" name="lastname" required > <br>
Enrolment Number: <input type="Number" name="Enrolment" required> <br>
Contact no.: <input type="Number" name="contact" required> <br>



School of <select name="school">

  <option value="Engineering" > Engineering </option>
  <option value="Architecture" > Architecture </option>
  <option value="Education" > Education  </option>
  <option value="Fashion & Design" > Fashion & Design </option>
  <option value="Law" > Law </option>
  <option value="Hospitality" > Hospitality </option>
</select> <br>





Course: <select name="course" >
                   <option value="B.Tech Computer Science">    B.Tech-Computer Science    </option>
                   <option value=" B.Tech Mechanical Engineering">  B.Tech-Mechanical Engineering    </option>
          <option value="B.Tech – Electronics and Communications Engineering"> B.Tech – Electronics and Communications Engineering </option>
       </select> <br>




Date: <input name="fromdate" type="date" required>
to <input name="todate" type="date" required> <br>
Time from: <input type="time" name="fromtime" required >
 to <input type="time" name="totime" required > <br>
 Location of Duty : <input type="text" name="location" required > <br>
 Reason: <input type="text" name="reason" <textarea rows="4" cols="30">   </textarea> <br>
 Co-ordinator/Teacher on Duty : <input type="name" name="teacher" required > <br>




<!-- .......................*********** JAVASCRIPT for click attribute ***********.........................-->



<!--
<button onclick="myFunction()">Apply for this OD </button>
<p id="demo" <input type="submit" value="submit">
</p>




<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Your OD has been forwarded for varification.<br><h2>This data is sent</h2>";

}
</script>
-->


<p id="demo"  style="display:none">  Your OD has been sent for verification  </p>

  <button type="submit" value="submit"
  onclick="document.getElementById('demo').style.display='block'">   Apply OD
</button>





</form>


<!-- Start of CuterCounter Code -->
<img src="http://www.cutercounter.com/hit.php?id=21559&nd=6&style=8" border="5" alt="hit counter"></a>
<!-- End of CuterCounter Code -->

<?php
//---------------------************-printing data recieved-for user on frontend ************---------------------//

echo $firstname ;
echo " ";

echo $lastname ;
echo "<br> ";
echo $enrolment ;
echo "<br>";
echo $contact ;
echo "<br>";
echo $school ;
echo "<br>";
echo $course ;
echo "<br>";
echo $fromdate ;
echo "<br>";
echo $todate;
echo "<br>";
echo$fromtime;
echo "<br>";
echo $totime;
echo "<br>";
 echo  $location;
 echo "<br>";
  echo $reason;
  echo "<br>";
  echo $teacher;
  echo "<br>";


  ?>





</center>
</body>
</html>
