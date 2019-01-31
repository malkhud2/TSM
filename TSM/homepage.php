<?php  include('server.php'); ?>
<?php include('errors.php'); ?>
<?php

session_start();

print_r($_SESSION);

printTop();
printAd();


if(isset($_SESSION['userEmail']) && $_SESSION['userPassword']) {


    print 
printindexForm();

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
  
                            
                            
                            

printBottom();

function printAd(){
    print
    "<div class='well'>\n".
    // "<div class='container'>\n".
  
  "<div id='myCarousel' class='carousel slide' data-ride='carousel'>\n".
 
    "<ol class='carousel-indicators'>\n".
     "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>\n".
      "<li data-target='#myCarousel' data-slide-to='1'></li>\n".
      "<li data-target='#myCarousel' data-slide-to='2'></li>\n".
      "<li data-target='#myCarousel' data-slide-to='3'></li>\n".
    "</ol>\n".


    "<div class='carousel-inner'>\n".

      "<div class='item active'>\n".
        "<img src='Images/imgsizewebsite1.png' alt='Tutor' style='width:100%;'>\n".
      "</div>\n".

    
    
      "<div class='item'>\n".
        "<img src='Images/imgsizewebsite2.png' alt='Books' style='width:100%;'>\n".
      "</div>\n".
      
      "<div class='item'>\n".
        "<img src='Images/imgsizewebsite3.png' alt='Club' style='width:100%;'>\n".
      "</div>\n".
      
      "<div class='item'>\n".
        "<img src='Images/imgsizewebsite4.png' alt='Event' style='width:100%;'>\n".
      "</div>\n".
  
    "</div>\n".

    "<a class='left carousel-control' href='#myCarousel' data-slide='prev'>\n".
      "<span class='glyphicon glyphicon-chevron-left'></span>\n".
      "<span class='sr-only'>Previous</span>\n".
    "</a>\n".
    "<a class='right carousel-control' href='#myCarousel' data-slide='next'>\n".
      "<span class='glyphicon glyphicon-chevron-right'></span>\n".
      "<span class='sr-only'>Next</span>\n".
    "</a>\n".
  "</div>\n".
// "</div>\n".
"</div>\n".

"<br />\n";
}

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
                "<img class='img-responsive' src='./Images/reverME.png' alt='Chania' width='360' height='245'>\n".
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
       " <li class='dropdown'>\n".
         " <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Apply As<span class='caret'></span></a>\n".
          "<ul class='dropdown-menu'>\n".
            "<li><a href='http://malkhud2.create.stedwards.edu/TSM/tutorForm.php'>Tutor</a></li>\n".
            "<li><a href='http://malkhud2.create.stedwards.edu/TSM/clubForm.php'>Club Member</a></li>\n".
          "</ul>\n".
      "  </li>\n".
        
 "</ul>\n".
 "<ul class='nav navbar-nav navbar-right'>\n".
    //     "<li><a href='http://malkhud2.create.stedwards.edu/TSM/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>\n".
    //     "<li><a href='http://malkhud2.create.stedwards.edu/TSM/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>\n".
    "<li><a href='http://malkhud2.create.stedwards.edu/TSM/userprofile.php'><span class='glyphicon glyphicon-user'></span> User Profile</a></li>\n".
         "<li><a href='http://malkhud2.create.stedwards.edu/TSM/logout.php'><span class='glyphicon glyphicon-log-out'></span> logout</a></li>\n".
        "</ul>\n".
    "</div>\n".
  "</div>\n".
"</nav>\n";
// "<br />\n";

    }

function printindexForm() {
    
    
    
print    
    "<div class='well'>\n".
    "<section>\n".
    "    <div class='container-fluid'>\n".
            
        "<div class='col-sm-6'>\n".
            "<div class='jumbotron'>\n".
            "<img src='./Images/male-cartoon-pointing-to-white-board.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/tutor.php'>  Find your Tutor</a></h3>\n".
            "<p> Our online tutors are ready to help you 24/7.</p>\n".
            "</div>\n".
        "</div>\n".

        "<div class='col-sm-6'>\n".
          "  <div class='jumbotron'>\n".
            "<img src='./Images/books.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/books.php'>  Books</a></h3>\n".
            "<p> Buy and sell books with other students.</p>\n".
            "</div>\n".
        "</div>\n".

        "<div class='col-sm-6'>\n".
            "<div class='jumbotron'>\n".
            "<img src='./Images/calendar.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/events.php'>  Events</a></h3>\n".
            "<p> Check what is happning on your campus right now. </p>\n".
            "</div>\n".
        "</div>\n".

        "<div class='col-sm-6'>\n".
          " <div class='jumbotron'>\n".
            "<img src='./Images/disco-ball.png'>\n".
            "<h3><a  href='http://malkhud2.create.stedwards.edu/TSM/clubs.php'>  Clubs</a></h3>\n".
            "<p> Discover clubs on your campus. </p>\n".
            "</div>\n".

        "</div>\n".
        
      "</div>\n".
    "</section>\n".
   "</div> \n".
   "<br />\n";
    
}



function printBottom() {

    print
       "<footer class='container-fluid text-center'> \n".
  "<p>© referME  2018 - 2019 ST.EDWARDS.EDU </p>\n".
"</footer>\n".
        "</body> \n".
        "</html> \n";
}


?>


