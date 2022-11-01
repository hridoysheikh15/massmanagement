<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "newstd";

$conn = mysqli_connect($host, $user, $pass, $dbname);

$fname = $_POST['fname'];
$faname = $_POST['faname'];
$mname = $_POST['mname'];
$distric = $_POST['distric'];
$gender = $_POST['gender'];
$numbe = $_POST['numbe'];

$insertquary = "INSERT INTO stdlist(fname,faname, mname, distric, gender, numbe)
VALUES ( '$fname', '$faname', '$mname', '$distric', '$gender', '$numbe' )";

$runquery = mysqli_query($conn, $insertquary);
if ($runquery == true) {
    header("location:index.html?action=true");
} else {
    header("location:admission.html?action=false");
}


?>