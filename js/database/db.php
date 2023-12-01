<?php


$server='	sql208.infinityfree.com';
$username='if0_35254019';
$password='uFhtUNXbNYNTzx';
$dbname='if0_35254019_thyboonofficial';

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die('connection failed',mysqli_connect_error());
}
?>