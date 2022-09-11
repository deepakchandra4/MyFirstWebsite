<?php 

$con = mysqli_connect('localhost' , 'root');
if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con , 'mywebsite'); 

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST["mobile"];
$message = $_POST['message'];

$query = "insert into userinfodata (name, email,mobile,message )
values ('$name' , '$email' , '$mobile' , '$message') ";

echo "$query";
mysqli_query($con ,  $query);
header('location:index.php');



?>