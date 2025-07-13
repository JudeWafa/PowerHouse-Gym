
                    
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-project";


$fName = $_POST['fName'];
$gender = $_POST['gender'];
$DoB = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$city = $_POST['city'];
$more = $_POST['more'];
$plan = $_POST['plan'];
$street=$_POST['street'];
$courseTime = $_POST['courseTime'];

$_SESSION['fName']=$_POST['fName'];
$_SESSION['plan']=$_POST['plan'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO myDB (name, gender, DoB, phoneNumber, email, password, city, street, more, plan, courseTime)
VALUES ('$fName', '$gender', '$DoB', '$phone', '$email', '$password', '$city','$street', '$more', '$plan', '$courseTime')";

if($conn->query ($sql)===TRUE)
{
    
    echo "<script>
    alert('Registration Successful!');</script>";
    header("Location: welcome.php");
    exit();
}
else{
    echo "ERROR!". $sql."<br>".$conn->error;
}
$conn->close();
?>