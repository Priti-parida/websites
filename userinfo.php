<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection successful";
}
else{
    echo"no connection";
}

mysqli_select_db($con,'websites');

$user = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$comments = $_POST['comments'];

$query="insert into websitesdata(username,email,phonenumber,comments) 
values ('$user','$email','$phone','$comments')";

mysqli_query($con,$query);

header('location:index.php');

?>