<?php



function dbConnect()
{
$servername = "localhost";
$username = "malkhudc_TSM";
$password = "1m4a1m2K";
$dbname = "malkhudc_TSM-2018";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
return $conn;
} //end of function



function UpdatetutorForm($conn, $userId)
{
    if(isset($_GET['activate'])){
    
    $the_userId = ($_GET['activate']);
	
$sql = "UPDATE user SET isActive ='1' WHERE userId=$the_userId";
//1

if (mysqli_query($conn, $sql)) {
 header('location: getUser.php?Record updated successfully');
} else {
echo "Error updating record: " . mysqli_error($conn);
}
}
}




$conn= dbConnect();

UpdatetutorForm($conn, $userId);







?>

