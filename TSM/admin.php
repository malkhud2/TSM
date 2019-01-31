<?php
session_start(); //Start the session



printTop();

printloginForm();

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
      "<a class='navbar-brand' href='http://malkhud2.create.stedwards.edu/TSM/index.php'>referME</a>\n".
    "</div>\n".
    "<div class='collapse navbar-collapse' id='myNavbar'>\n".
      "<ul class='nav navbar-nav'>\n".
       " <li class='dropdown'>\n".
         " <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Apply As<span class='caret'></span></a>\n".
          "<ul class='dropdown-menu'>\n".
            "<li><a href='http://malkhud2.create.stedwards.edu/TSM/tutorForm.php'>Tutor</a></li>\n".
          "</ul>\n".
      "  </li>\n".
        
      "</ul>\n".
      "<ul class='nav navbar-nav navbar-right'>\n".
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>\n".
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>\n".
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/logout.php'><span class='glyphicon glyphicon-log-out'></span> logout</a></li>\n".
      "</ul>\n".
    "</div>\n".
  "</div>\n".
"</nav>\n";

    }

function printloginForm() {
    
print    
    "<div class='well'>\n".
    "<section>\n".
    "    <div class='container'>\n".
            
        "<div class='col-sm-6'>\n".
            "<div class='well'>\n".
            "<img src='./Images/male-cartoon-pointing-to-white-board.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/tutor.php'>  Need a Tutor?</a></h3>\n".
            "<p> a person charged with the instruction and guidance of another: such as. a : a private teacher. b : a teacher in a British university who gives individual instruction to undergraduates.</p>\n".
            "</div>\n".
        "</div>\n".
        
        "<div class='col-sm-6'>\n".
          "  <div class='well'>\n".
            "<img src='./Images/books.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/books.php'>  Seeling Books</a></h3>\n".
            "<p> a person charged with the instruction and guidance of another: such as. a : a private teacher. b : a teacher in a British university who gives individual instruction to undergraduates.</p>\n".
            "</div>\n".
        "</div>\n".
        
        "<div class='col-sm-6'>\n".
            "<div class='well'>\n".
            "<img src='./Images/calendar.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/events.php'>  Event</a></h3>\n".
            "<p> a person charged with the instruction and guidance of another: such as. a : a private teacher. b : a teacher in a British university who gives individual instruction to undergraduates. </p>\n".
            "</div>\n".
        "</div>\n".
        
        "<div class='col-sm-6'>\n".
           " <div class='well'>\n".
            "<img src='./Images/disco-ball.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/clubs.php'>  Clubs</a></h3>\n".
            "<p> a person charged with the instruction and guidance of another: such as. a : a private teacher. b : a teacher in a British university who gives individual instruction to undergraduates. </p>\n".
            "</div>\n".
        "</div>\n".
        
        "<div class='col-sm-6'>\n".
           " <div class='well'>\n".
            "<img src='./Images/disco-ball.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/approv.php'>  Approv Tutors</a></h3>\n".
            "<p> a person charged with the instruction and guidance of another: such as. a : a private teacher. b : a teacher in a British university who gives individual instruction to undergraduates. </p>\n".
            "</div>\n".
        "</div>\n".
        
      "</div>\n".
    "</section>\n".
   "</div> \n";
    
}



function printBottom() {

    print
       "<footer class='container-fluid text-center'> \n".
  "<p>reverME, 2018-2019, ST.EDWARDS.EDU</p>\n".
"</footer>\n".
        "</body> \n".
        "</html> \n";
}


?>



