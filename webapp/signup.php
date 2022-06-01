<?php
$connection = mysqli_connect('localhost','root');

if($connection){
    echo "connection is Established !";
}
else{
    echo "error Connection Failed"
}

mysqli_select_db($connection, 'authentication');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass= $_POST['passsword'];

$data = "INSERT INTO credit (FNAME,LNAME,EMAIL,PASSWD) VALUES ('$firstname','$lastname','$email','$pass')";

mysqli_query($connection,$data);
header('location:signupsuccessful.php');


?>