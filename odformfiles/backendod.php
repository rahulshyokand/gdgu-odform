<?php
//--------------------- define variables and set to empty values--------------------//
$firstname = $lastname = $enrolment = $contact = $school = $course = $fromdate = $todate= $fromtime=$totime= $location =$reason=$teacher="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = ($_POST["firstname"]);
  $lastname = ($_POST["lastname"]);
  $enrolment = ($_POST["Enrolment"]);
  $contact = ($_POST["contact"]);
 $school = ($_POST["school"]);
$course = ($_POST["course"]);
  $fromdate = ($_POST["fromdate"]);
  $todate = ($_POST["todate"]);
  $fromtime = ($_POST["fromtime"]);
  $totime = ($_POST["totime"]);
  $location=($_POST["location"]);
  $reason=($_POST["reason"]);
  $teacher=($_POST["teacher"]);



}

?>



<?php
//----------------------php file handling starts from here----------------------------//

























$fp = fopen('mydata.txt', 'a+');

fwrite($fp, "*********************************************\n");
fwrite($fp, $firstname);
fwrite($fp, " ");

fwrite($fp, $lastname);
fwrite($fp, "\n");

fwrite($fp, $enrolment);
fwrite($fp, "\n");

fwrite($fp, $contact);
fwrite($fp, "\n");

fwrite($fp, $school);
fwrite($fp, "\n");

fwrite($fp, $course);
fwrite($fp, "\n");

fwrite($fp, $fromdate);
fwrite($fp, "\n");

fwrite($fp, $todate);
fwrite($fp, "\n");

fwrite($fp, $fromtime);
fwrite($fp, "\n");

fwrite($fp, $totime);
fwrite($fp, "\n");

fwrite($fp, $location);
fwrite($fp, "\n");

fwrite($fp, $reason);
fwrite($fp, "\n");

fwrite($fp, $teacher);
fwrite($fp, "\n");

fwrite($fp, "*********************************************\n");


fclose($fp);

 ?>
