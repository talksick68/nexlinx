<?

$conn = new mysqli('db', 'root', 'OkhaJaya911');
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


phpinfo();

?>
