<?php  include('server.php'); ?>
<?php 
session_start();
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
    "<meta charset='utf-8'>\n".
  "<meta name='viewport' content='width=device-width, initial-scale=1'>\n".
  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>\n".
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>\n".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>\n".
     "<link rel='stylesheet' href='../CSS/TSMstyle.css' type='text/css' /> \n" .

"</head>  \n".

"<body>\n";
  
//   " <header>\n".
//         "<div class='row'>\n".
//             "<div>\n".
//                 "<img class='img-responsive' src='../Images/reverME.png' alt='Chania' width='360' height='245'>\n".
//             "</div>\n".
//          " </div>\n".
//     "</header> \n";
           
// "<br />\n";

    }


function printloginForm() {
    
print    
"<div class='limiter'>\n".
"<div class='container-login100' style='background:url('../Images/bk.jpg')>\n".
"<div class='wrap-login100'>\n".
				// 	"<span class='login100-form-logo'>\n".
				// 		"<i class='zmdi zmdi-landscape'>\n".
				// 		"</i>\n".
				// 	"</span>\n".
 "<form class='login100-form validate-form' method='post' action='login.php' >\n".
 	"<span class='login100-form-title p-b-34 p-t-27'>\n".
      	"<h2>Admin login</h2>\n".
      	"</span>\n".
      	"<br />\n".
            //  "<div class='well'>\n".
    "<div class='wrap-input100 validate-input'>\n".
      "<input type='email' class='input100'  placeholder='Enter email' name='userEmail' style='height:50px'>\n".
      "<span class='focus-input100'></span>\n".
      "</div>\n".
    "<div  class='wrap-input100 validate-input'>\n".
      "<input type='password'  class='input100'  placeholder='Enter password' name='userPassword' style='height:50px'>\n".
      "<span class='focus-input100'></span>\n".
    "</div>\n".
    // "</div>\n".
    "<div class='container-login100-form-btn'>\n".
    "<button type='submit' class='login100-form-btn' name='login_user'>Submit</button>\n".
    "</div>\n".

"</form>\n".
"</div>\n".
"</div>\n".
"</div>\n";


    
}


// function printloginForm() {
    
// print    
//     "<div class='well'>\n".
// //     "<div class='banner-img'><img src='Images/3837.jpg' alt=''>\n".
// // "<div class='banner-content'>\n".

// "<div class='container'>\n".
//  "<form class='form' method='post' action='login.php' >\n".
//       	"<h2>Admin Login </h2>\n".
//              "<div class='well'>\n".
//     "<div class='form-group'>\n".
//       "<label for='userEmail'>Email:</label>\n".
//       "<input type='email' class='form-control'  placeholder='Enter email' name='userEmail' style='height:50px'>\n".
//       "</div>\n".
//     "<div class='form-group'>\n".
//       "<label for='userPassword'>Password:</label>\n".
//       "<input type='password' class='form-control'  placeholder='Enter password' name='userPassword' style='height:50px'>\n".
//     "</div>\n".
//     "</div>\n".
    
//     "<button type='submit' class='btn btn-primary' name='login_user'>Submit</button>\n".
//   	"</div>\n".
  	
// "</form>\n".
// "</div>\n".
// // "</div>\n".
// // "</div>\n".
// // "</div>\n".
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





    

    
            



