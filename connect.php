<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='Za81as@#1212';
$DATABASE='signupforms';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));
}



?>