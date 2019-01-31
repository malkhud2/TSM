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
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>\n".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>\n".
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
  
"<div class='container'>\n".
"<form>\n".

"</div>\n".

"</body>\n".
"</html>\n";

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
  


?>



