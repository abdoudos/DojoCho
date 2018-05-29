<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dojo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$_email = $_POST['email'];
//$_pass = $_POST['pass'];
//$sql1 = "SELECT `id`, `name`, `email`, `password`,`perssone_id` FROM `users` ";
 //  echo "<br>$_email<br>"; 
   //echo "<br>$_pass <br>"; 
//$result = mysqli_query($conn, $sql1);

//if (mysqli_num_rows($result) > 0) {
    // output data of each row
  //  while($row = mysqli_fetch_assoc($result)) {
    //    echo "id: " . $row["id"]. " - Email: " . $row["email"]. " " . $row["password"]. "<br>";
    //}
//} else {
  //  echo "0 results";
	//}

   
  
else echo"Connection Succeed";
$_email = $_POST['email'];
$_password = $_POST['password'];
$sql1 = "SELECT `id`, `name`, `email`, `password`,`perssone_id` FROM `users` ";
  echo "<br>$_email<br>"; 
echo "<br>$_pass <br>"; 
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
 //output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
  if($_email==$row["email"] &&  $_password ==$row["password"])
  { 
header('Location: http://www.google.com'); 
//  echo "id: " . $row["id"]. "<br> - Email: " . $row["email"]. " <br>password:" . $row["password"]. "<br>";
  }
  else
  {
header('Location: login.html'); 
  }
}
} else {
  echo "0 results";
}

?>