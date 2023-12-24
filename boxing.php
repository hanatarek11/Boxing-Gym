<?php
$FirstName=$_REQUEST['first Name'];
$LastName=$_REQUEST['Last Name'];
$Age=$_REQUEST['Age'];
$phone=$_REQUEST['phone'];
$Location=['Location'];
 if(isset($_POST['myBtn']))
 {
$host="localhost";
$user="root";
$password="";
$db="boxinggym";
    $conn= mysqli_connect($host, $user,$password,$db);

$insert="insert into register values('$FirstName','$LastName','$Age','$phone','$Location')";
mysqli_query( $conn,$insert);
if($conn){
    echo("<h1 style=color:darkmagenta; >Your Registration is Done! </h1> " );
}
else{
    echo("<h1 style=color:black; >Your Registration is failed! </h1> " );
}

 }








?>