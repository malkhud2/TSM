<?php  include('server.php'); ?>
<?php
session_start();

print_r($_SESSION);

printTop();

if(isset($_SESSION['userEmail']) && $_SESSION['userPassword']) {

    print 
printtutorForm();


// } if(isset($_SESSION['user_role']) == $user_role && $_SESSION['user-role'] == 'Tutor'){

// $user_check_query = "SELECT user_role FROM user WHERE user_role='Tutor'";
// $result = mysqli_query($db, $user_check_query);
// $user = mysqli_fetch_assoc($result);

//     // print

//       if(isset($_SESSION['user_role']) == 'Tutor'){
        
    //  print
        
    $conn = dbConnect();

    returnTutorForm($conn);

    $conn->close();
    
        
    }

  else{
    print "<div class='well'>\n";
    print "<section>\n";
    print "    <div class='container'>\n";
    print "<br>It appears you Don't have accses To this page.\n";
    print "<br>Try to log in again Click: <a href='./login.php'>here</a> \n";
    print        "</div>\n";
    print"</section>\n";
    print"</div> \n";


}





printBottom();

function printTop() {
    print
    "<!DOCTYPE html> \n".
"<html lang='en'> \n".
"<head> \n".
    
    "<!--<meta name='viewport' content='width=device-width'>-->\n".
    "<title>reverME</title>\n".
    "<!--<link rel='stylesheet' href='./CSS/TSMstyle.css'>-->\n".
    "<meta charset='utf-8'>\n".
  "<meta name='viewport' content='width=device-width, initial-scale=1'>\n".
  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>\n".
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>\n".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>\n".
  "<link rel='stylesheet' href='./CSS//TSMstyle.css' type='text/css' /> \n" .
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
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/logout.php'><span class='glyphicon glyphicon-log-out'></span> logout</a></li>\n".
      "</ul>\n".
    "</div>\n".
  "</div>\n".
"</nav>\n";

    }
    
    
function printtutorForm() {
    
print    
"<div class='well'>\n".
    "<div class='container'>\n".
        "<h2>Request Tutor</h2>\n".
            "<form method='post' action='tutor_new_post.php' >\n".
"<button type='submit' class='btn btn-primary' name='new_ad'>Request Tutor</button>\n".
"</div>\n".
"</form>\n".
"</div>\n";


    
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
    
$sql = "SELECT * FROM tutors ORDER BY tutor_id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $tutor_id = $row['tutor_id'];
    $tutor_class = $row['tutor_class'];
    $tutor_time = $row['tutor_time'];
    $tutor_price = $row['tutor_price'];
    $tutor_date = $row['tutor_date'];
    $tutor_loucation = $row['tutor_loucation'];
    
    
    
    echo  "<div class='well'>\n".
"<div class='container'> \n".
  "<div class='row'>\n".
    "<div class='col-sm-12'>\n";
    
    echo        
     "$tutor_id : ";

//  tutor_class   

    $links = array();
    $parts = explode(',', $row['tutor_class']);
    foreach ($parts as $tag )
    {
        $links[] = "<a href='t-".$tag."'>".$tag."</a>";

    }
    echo implode(", ", $links);
    echo '</p>';
    
echo  "</div>\n".
    "</div>\n".
  "</div>\n".
"</div>\n";


}
}
}


function printloginForm() {
    
    
    
print    



    "<div class='well'>\n".
        "<div class='container'>\n".
    "<h2>Looking for tutor?.</h2>\n".
 "<form method='post' action='tutor.php' >\n".
      	
           "<div class='well'>\n".
             "<div class='form-group'>\n".
      "<label for='date'>day:</label>\n".
      "<input type='date' class='form-control'  placeholder='‘Uplode your file' name='date' style='height:50px'>\n".
      "</div>\n".


    "<div class='form-group'>\n".
      "<label for='time'>Time:</label>\n".
      "<input type='time' class='form-control'  placeholder='‘Uplode your file' name='time' style='height:50px'>\n".
      "</div>\n".
                
    "<div class='form-group'>\n".
      "<label for='fileToUpload'>class:</label>\n".
      "<input type='text' class='form-control'  placeholder='Type class name' name='fileToUpload' style='height:50px'>\n".
      "</div>\n".
      
       "<div class='form-group'>\n".
      "<label for='fileToUpload'>loucation:</label>\n".
      "<input type='text' class='form-control'  placeholder='loucation' name='fileToUpload' style='height:50px'>\n".
      "</div>\n".
                
    // "<div class='form-group'>\n".
    //   "<label for='fileToUpload'>price:</label>\n".
    //   "<input type='text' class='form-control'  placeholder='‘Price' name='fileToUpload' style='height:50px'>\n".
    //   "</div>\n".
                "</div>\n".
   
    "<div class='container'>\n".
    "<button type='submit' class='btn btn-default' name='new_tutor'>Requiest Tutor</button>\n".
    "</div>\n".
    
  	"</div>\n".
  	
"</form>\n".

"</div>\n".
"</div>\n";

}

    
function printBottom() {

    print
       "<footer class='container-fluid text-center'> \n".
  "<p>referME, 2018-2019, ST.EDWARDS.EDU</p>\n".
"</footer>\n".
        "</body> \n".
        "</html> \n";
}


?>