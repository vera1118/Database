<?php
require_once 'connect.php';
//if (isset($_POST['submit'])){
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

//should add judgement for different roles
$sql = "SELECT * FROM `student` WHERE sname='$uname' and spwd='$pwd'";
$result = mysqli_query($conn, $sql) or die(mysqli_error());
$count = mysqli_num_rows($result);
if ($count == 1){
	echo "You are logged in";
}else {
	echo "Login Failed";
}
//}
?>
