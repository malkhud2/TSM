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



function UpdateClubForm($conn, $cform_id)
{
    if(isset($_GET['approve'])){
    
    $the_cform_id = ($_GET['approve']);
    
$sql = "UPDATE clubForm SET isApproved ='1' WHERE cform_id = $the_cform_id";
//1


if (mysqli_query($conn, $sql)) {
header('location: getClubForm.php?Record updated successfully');
} else {
echo "Error updating record: " . mysqli_error($conn);
}
}
}

function RejectClubForm($conn, $cform_id)
{
if(isset($_GET['reject'])){
    
    $the_cform_id = ($_GET['reject']);

$sql = "UPDATE clubForm SET NotApproved='1' WHERE cform_id=$the_cform_id";


if (mysqli_query($conn, $sql)) {
header('location: getClubForm.php?Record updated successfully');
} else {
echo "Error updating record: " . mysqli_error($conn);
}
}
}

$conn= dbConnect();

UpdateClubForm($conn, $cform_id);

RejectClubForm($conn, $cform_id);






?>

