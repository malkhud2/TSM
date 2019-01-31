<?php  include('server.php'); ?>
<?php include('errors.php'); ?>
<?php
session_start();

print_r($_SESSION);

printTop();

if(isset($_SESSION['userEmail']) && $_SESSION['userPassword']) {
// if ($_SESSION['userEmail'] == $userEmail) {

 
$conn = dbConnect();
printloginForm($conn);
$conn->close();
   
}

    

  else {
          
    print "<div class='well'>\n";
    print "<section>\n";
    print "    <div class='container'>\n";
    print "<br>It appears you are not logged in.\n";
    print "<br>Try to log in again.  Click: <a href='./login.php'>here</a> \n";
    print        "</div>\n";
    print"</section>\n";
    print"</div> \n";
  }

  


printBottom();


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

function printTop() {
    print
    "<!DOCTYPE html> \n".
"<html lang='en'> \n".
"<head> \n".
    
    "<!--<meta name='viewport' content='width=device-width'>-->\n".
    "<title>reverME</title>\n".
    // "<!--<link rel='stylesheet' href='./CSS/TSMstyle.css'>-->\n".
    "<meta charset='utf-8'>\n".
  "<meta name='viewport' content='width=device-width, initial-scale=1'>\n".
  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>\n".
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>\n".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>\n".
     "<link rel='stylesheet' href='./CSS/TSMstyle.css' type='text/css' /> \n" .

"</head>  \n".

"<body>\n".
  
   " <header>\n".
        "<div class='row'>\n".
            "<div>\n".
                "<img class='img-responsive' src='./Images/reverME.png' alt='Chania' width='460' height='345'>\n".
            "</div>\n".
         " </div>\n".
    "</header> \n".
            "<nav class='navbar navbar-inverse'>\n".
  "<div class='container-fluid'>\n".
    "<div class='navbar-header'>\n".
      "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>\n".
        "<span class='icon-bar'></span>\n".
        "<span class='icon-bar'></span>\n".
        "<span class='icon-bar'></span> \n".                       
      "</button>\n".
      "<a class='navbar-brand' href='http://malkhud2.create.stedwards.edu/TSM/homepage.php'>referME</a>\n".
    "</div>\n".
    "<div class='collapse navbar-collapse' id='myNavbar'>\n".
      "<ul class='nav navbar-nav'>\n".
    //   " <li class='dropdown'>\n".
    //      " <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Apply As<span class='caret'></span></a>\n".
    //       "<ul class='dropdown-menu'>\n".
    //         "<li><a href='http://malkhud2.create.stedwards.edu/TSM/tutorForm.php'>Tutor</a></li>\n".
    //         "<li><a href='http://malkhud2.create.stedwards.edu/TSM/clubForm.php'>Club Member</a></li>\n".
    //       "</ul>\n".
    //   "  </li>\n".
        
      "</ul>\n".
      "<ul class='nav navbar-nav navbar-right'>\n".
        // "<li><a href='http://malkhud2.create.stedwards.edu/TSM/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>\n".
        // "<li><a href='http://malkhud2.create.stedwards.edu/TSM/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>\n".
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/userprofile.php'><span class='glyphicon glyphicon-user'></span> User Profile</a></li>\n".
         "<li><a href='http://malkhud2.create.stedwards.edu/TSM/logout.php'><span class='glyphicon glyphicon-log-out'></span> logout</a></li>\n".
      "</ul>\n".
    "</div>\n".
  "</div>\n".
"</nav>\n";



    }
    
    // echo "<div class='col-md-8'>";
    //                     echo "<div class='tab-content profile-tab' id='myTabContent'>";
    //                       echo  "<div class='tab-pane fade show active' id='home' role='tabpanel' aria-labelledby='home-tab'>";
    //                               echo     "<div class='row'>";
    //                                   echo      "<div class='col-md-6'>";
    //                                       echo      "<label> ID</label>";
    //                                      echo     "</div>";
    //                                      echo   "<div class='col-md-6'>";
    //                                     echo        "<p>".$userId = $row['userId']."</p>";
    //                                   echo     "</div>";
    //                                   echo     "</div>";
    //                                       echo     "<div class='row'>";
    //                                   echo      "<div class='col-md-6'>";
    //                                       echo      "<label>First Name</label>";
    //                                      echo     "</div>";
    //                                      echo   "<div class='col-md-6'>";
    //                                     echo        "<p>Kshiti123</p>";
    //                                   echo     "</div>";
    //                                   echo     "</div>";
    //                                       echo     "<div class='row'>";
    //                                   echo      "<div class='col-md-6'>";
    //                                       echo      "<label>Last Name</label>";
    //                                      echo     "</div>";
    //                                      echo   "<div class='col-md-6'>";
    //                                     echo        "<p>Kshiti123</p>";
    //                                   echo     "</div>";
    //                                   echo     "</div>";
    //                                       echo     "<div class='row'>";
    //                                   echo      "<div class='col-md-6'>";
    //                                       echo      "<label>Email</label>";
    //                                      echo     "</div>";
    //                                      echo   "<div class='col-md-6'>";
    //                                     echo        "<p>Kshiti123</p>";
    //                                   echo     "</div>";
    //                                   echo     "</div>";
    //                                       echo     "<div class='row'>";
    //                                   echo      "<div class='col-md-6'>";
    //                                       echo      "<label>Univirity</label>";
    //                                      echo     "</div>";
    //                                      echo   "<div class='col-md-6'>";
    //                                     echo        "<p>Kshiti123</p>";
    //                                   echo     "</div>";
    //                                   echo     "</div>";
    //                                       echo     "<div class='row'>";
    //                                   echo      "<div class='col-md-6'>";
    //                                       echo      "<label>Major</label>";
    //                                      echo     "</div>";
    //                                      echo   "<div class='col-md-6'>";
    //                                     echo        "<p>Kshiti123</p>";
    //                                   echo     "</div>";
    //                                   echo     "</div>";
    //                       echo "</div>";
function printloginForm($conn)
{
$userEmail = $_SESSION['userEmail'];
// $userFirstName = mysqli_real_escape_string($conn, $_POST['userFirstName']);
$sql = "SELECT * FROM user where userEmail='{$userEmail}'";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
    echo "<div class='container emp-profile'>";
        // "<div class='container emp-profile'>";
            // "<form method='post'>";
                "<div class='row'>";
                    "<div class='col-md-4'>";
                        echo "<div class='profile-img'>";
                            echo "<img src='https://www.amiciidogrescue.org.uk/wp-content/uploads/2017/03/user-icon.png' alt=''/>";
                    // echo "</div>";
// echo "<div class='container emp-profile'>";
// echo "<div class='container'>";
echo"<div class='row'>";
echo	"<div class='col-md-10 col-md-offset-1'>";
echo "</br>";
        echo "<h1 style=' text-align: center'> welcome {$userEmail}</h1>";
        echo "</br>";
        

                // echo "ID";
                //  echo "</br>";
                // echo "First Name";
                //  echo "</br>";
                // echo "Last Name";
                //  echo "</br>";
                // echo "Email";
                //  echo "</br>";
                // echo "University";
                //  echo "</br>";
                // echo "Major";
                // echo "</br>";
                // echo "User Role";
        while($row = mysqli_fetch_array($result)){
echo	"<div class='col-md-10 col-md-offset-1'>";
            echo"<div class='row'>";
                    "<div class='col-md-6'>";
                 echo "ID: " . $row['userId'] . "";
                echo "</div>";
                 
                 echo "</br>";
                  echo"<div class='row'>";
                    "<div class='col-md-6'>";
                echo "First Name: " . $row['userFirstName'] . "";
                echo "</div>";
                 echo "</br>";
                  echo"<div class='row'>";
                    "<div class='col-md-6'>";
                echo "Last Name:  " . $row['userLastName'] . "";
                echo "</div>";
                 echo "</br>";
                  echo"<div class='row'>";
                    "<div class='col-md-6'>";
                echo "Email:  " . $row['userEmail'] . "";
                echo "</div>";
                 echo "</br>";
                  echo"<div class='row'>";
                    "<div class='col-md-6'>";
                echo "University:  " . $row['userUniversity'] . "";
                echo "</div>";
                 echo "</br>";
                  echo"<div class='row'>";
                    "<div class='col-md-6'>";
                echo "Major: " . $row['userMajor'] . "";
                echo "</div>";
                echo "</br>";
                 echo"<div class='row'>";
                    "<div class='col-md-6'>";
                echo "You are: " . $row['user_role'] . "";
                echo "</div>";
                echo "</div>";

        }
        // echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        // echo "</form>";
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

// function printloginForm() {
    
    
    
// print    

//     "<div class='well'>\n".
//         "<div class='container'>\n".
//     "<h2>My Profile $user_name</h2>\n".
//     "<br>\n".
//  "<form method='get' action='userprofile.php' >\n".
      	
//      "<div class='well'>\n".
//       "<label for='user_first_name'>First Name:</label>\n".

// "<br>\n".

//       "<label for='tutor_time'>Last Name:</label>\n".

// "<br>\n".

//       "<label for='fileToUpload'>Email:</label>\n".


      
//       "<br>\n".

//       "<label for='fileToUpload'>Major:</label>\n".
      
      
//             "<br>\n".

//       "<label for='fileToUpload'>Univirsty</label>\n".
//       "</div>\n".
   
//     "<div class='container'>\n".
//     "<button type='submit' class='btn btn-default' name='new_tutor'>Request Tutor</button>\n".
//     "</div>\n".
    
//   	"</div>\n".
  	
// "</form>\n".

// "</div>\n".
// "</div>\n";
    
// }



function printBottom() {

    print
    
       "<footer class='container-fluid text-center'> \n".
  "<p>referME, 2018-2019, ST.EDWARDS.EDU</p>\n".
"</footer>\n".
        "</body> \n".
        "</html> \n";
}


?>


