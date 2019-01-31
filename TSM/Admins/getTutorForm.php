<?php
session_start();

print_r($_SESSION);


if(isset($_SESSION['Email']) && $_SESSION['Password'] && ($_SESSION["role"] != 'Admin')) {

    print 
"<!DOCTYPE html>\n".
"<html lang='en'>\n".
"<head>\n".
  "<title>Admin Panel</title>\n".
  "<meta charset='utf-8'>\n".
  "<meta name='viewport' content='width=device-width, initial-scale=1'>\n".
  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>\n".
  "<link rel='stylesheet' type='text/css' href='http://cdn.datatables.net/1.10.4/css/jquery.dataTables.css'>\n".
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>\n".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>\n".
  "<script src='http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js'></script>\n".
//   "<link rel='stylesheet' href='./css.css' type='text/css' /> \n".

"<script type='text/javascript' class='init'>
		   $(document).ready(function() {
			   $('#tutor').DataTable();
		   });
		</script>\n".
	
		"<style>
			h1 { 
				padding-top: 25px;
				padding-bottom: 25px;
				border: 2px solid;
				border-radius: 25px;
				align: center;
				background-color: pink;
			}
			
		</style>\n".
"</head>\n".
"<body>\n".

"<nav class='navbar navbar-default'>\n".
  "<div class='container-fluid'>\n".
    "<div class='navbar-header'>\n".
      "<a class='navbar-brand' href='http://malkhud2.create.stedwards.edu/TSM/Admins/index.php'>Admin Panel</a>\n".
    "</div>\n".
    "<ul class='nav navbar-nav'>\n".
      "<li><a href='http://malkhud2.create.stedwards.edu/TSM/Admins/getTutorForm.php'>Tutor Form</a></li>\n".
      "<li><a href='http://malkhud2.create.stedwards.edu/TSM/Admins/getClubForm.php'>Club Form</a></li>\n".
      "<li><a href='http://malkhud2.create.stedwards.edu/TSM/Admins/getUser.php'>Activite User</a></li>\n".
      "<li><a href='http://malkhud2.create.stedwards.edu/TSM/Admins/logout.php'>Logout</a></li>\n".
    "</ul>\n".
  "</div>\n".
"</nav>\n".
  

                    


// "</div>\n".
         "</body>\n".
         "</html>\n";



$conn = dbConnect();

returnTutorForm($conn);

$conn->close();

 }

  else {
          
    print "<div class='well'>\n";
    // print "<section>\n";
    print "<div class='container'>\n";
    print "<div class='col-sm-6'>\n";
    // print "<div class='well'>\n";
    print "<br>It appears you are not logged in.\n";
    print "<br>Try to log in again click <a href='./login.php'>here</a> \n";
    print "</div>\n";
    // print "</section>\n";
    // print "</div> \n";
    print "</div>\n";
    print "</div>\n";
  }


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





function returnTutorForm($conn)
{
$sql = "SELECT * FROM tutorForm where isApproved='0' And NotApproved='0'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
	echo "<div class='container'>";
		    echo "<div class='ro'>";
		     echo "<div class='col-md-10 col-md-offset-1'>";
			     echo "<h1 align='center'  class='color-white'>Tutors Form</h1>";
			  echo"</div>";
			echo"</div>";
   echo "<div class='container'>";
            echo "<div class='row'>";
		        echo "<div class='col-md-10 col-md-offset-1'>";
		        
        echo "<table id='tutor' class='display' cellspacing='0' width='100%'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>GPA</th>";
                echo "<th>SKILL</th>";
                echo "<th>Accept</th>";
                echo "<th>Reject</th>";
            echo "</tr>";
            echo "</thead>";
        while($row = mysqli_fetch_array($result)){
                $tform_id = $row['tform_id'];
                $tform_GBA = $row['tform_GBA'];
                $tform_skill = $row['tform_skill'];
                $isApproved = $row['isApproved'];
            echo "<tr>";
                echo "<td>" . $row['tform_id'] . "</td>";
                echo "<td>" . $row['tform_GBA'] . "</td>";
                echo "<td>" . $row['tform_skill'] . "</td>";
                echo "<td>"."<a href='upTutor.php?approve=$tform_id'>Approve</a>"."</td>";
                echo "<td>"."<a href='upTutor.php?reject=$tform_id'>Reject</a>"."</td>";
            echo "</tr>";
            
        }
        
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

       

}



?>