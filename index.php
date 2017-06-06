<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';

$conn = new mysqli($servername,$username, $password);

if($conn->connect_error){
		die("Connection failed:" . $conn->connect_error);
}

echo "Successful Connection";
/*<html>
<form action="" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
<input type="submit">
    
</form>
</html>
*/
?>
