<?PHp
$servername = 'localhost';
$username = 'root';
$password = 'nutterbutter22';

$conn = new mysqli($servername,$username, $password);

if($conn->connect_error){
		die("Connection failed:" . $conn->connect_error);
}
echo "Successful Connection";


?>
