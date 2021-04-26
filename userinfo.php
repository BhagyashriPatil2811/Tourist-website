
<?php

$con=mysqli_connect('localhost','Bhagyashri','28112000');
if($con){
    echo "connection successful";
    }else{
        echo "no connection";
    }
mysqli_select_db($con,'shreetourism_userdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query = "insert into userinfodata (user,email,mobile,comment) 
values ('$user','$email','$mobile','$comment') ";



mysqli_query($con, $query);

header('location:index.php');



?>