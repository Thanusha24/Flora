
<?php
$conn = mysqli_Connect("localhost","root", "","user");
if($conn->connect_error){
	die('connection failed ');
} 
$userid = $_POST['userid'];
$password = $_POST['password'];

$sql="SELECT userid,password FROM login";

$result= $conn->query($sql);

if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		if(($userid === $row['userid'])&&($password === $row['password'])) {
			include("temp.html");
    
} } }else {
    echo 'acess denied';
}
?>
