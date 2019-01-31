<?php  include('server.php'); ?>
<?php include('errors.php'); ?>
<?php 

// session_start();

printTop();
 printloginForm();
 

 
      
//       if (isset($_POST['userName'], $_POST['userPassword'])) 
//     {
//         $userName = $_POST['userName'];
//         $userPassword = $_POST['userPassword'];
//         $userPasswordmd5 = md5[$userPassword];
//     }
    
//     $db = ADONewConnection('mysql');
    
//     $db->PConnect('localhost',          // mysQL on the local machine
//     'malkhudc_TSM',             // DB Username
//     '1m4a1m2K',                     // Password
//     'malkhudc_TSM-2018');
    
    
    
//     printUsers($db);
    
// function printUsers($db) {


 

//     $sql = "'select userEmail, userPassword from user where userEmail = '" . $userEmail . "'";
//     $rs = $db->Execute($sql);
   
    

//     if ($rs == false) { 
//         ' select failed \n '; 
//     } 

//     else {   
        
//         while (!$rs->EOF) { 
//           $userEmail = $rs->fields['userEmail']; 
//           $userPassword = $rs->fields['userPassword']; 
//           print '<p>User: ' . $dbUserEmail; 
//           print '<br />Password: ' . $userPassword . '</p>'; 
//           $rs->MoveNext(); 
//         } 
    
//     }



//         if ($dbUserEmail == $userEmail && $userPasswordmd5 == $userPassword) 
//         {
//             $_SESSION['login_user'] = 1;
//             print "<p>Log in successful!  Click <a href='./index.php'>here</a> to continue </p> \n";
//         }

        
//         else {
//             $_SESSION['login_user'] = 0;
//             print "<p>Login failed.  Try user: 'Lady Gaga' and password 'Secret'</p> \n";
            
//         }
        
//     }

//       if (isset($_POST['btnLogout'])) {
//         $_SESSION['loggedIn'] = 0;
//         print("<p>The user is logged out.</p>");
        
//     }
    

   
printBottom();



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
      "<a class='navbar-brand' href='http://malkhud2.create.stedwards.edu/TSM/index.php'>referME</a>\n".
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
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>\n".
        "<li><a href='http://malkhud2.create.stedwards.edu/TSM/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>\n".
      "</ul>\n".
    "</div>\n".
  "</div>\n".
"</nav>\n";

    }


// function printloginForm() {
    
// print    
// // "<div class='limiter'>\n".
// "<div class='container-login100' style='background:url('../Images/bk.jpg')>\n".
// "<div class='wrap-login100'>\n".
// 				// 	"<span class='login100-form-logo'>\n".
// 				// 		"<i class='zmdi zmdi-landscape'>\n".
// 				// 		"</i>\n".
// 				// 	"</span>\n".
//  "<form class='login100-form validate-form' method='post' action='login.php' >\n".
//  	"<span class='login100-form-title p-b-34 p-t-27'>\n".
//       	"<h2>Login </h2>\n".
//       	"</span>\n".
//             //  "<div class='well'>\n".
//     "<div class='wrap-input100 validate-input'>\n".
//       "<input type='email' class='input100'  placeholder='Enter email' name='userEmail' style='height:50px'>\n".
//       "<span class='focus-input100'></span>\n".
//       "</div>\n".
//     "<div  class='wrap-input100 validate-input'>\n".
//       "<input type='password'  class='input100'  placeholder='Enter password' name='userPassword' style='height:50px'>\n".
//       "<span class='focus-input100'></span>\n".
//     "</div>\n".
//     // "</div>\n".
//     "<div class='container-login100-form-btn'>\n".
//     "<button type='submit' class='login100-form-btn' name='login_user'>Submit</button>\n".
//     "</div>\n".
//     "<br />\n".
//     "<br />\n".
//     "<div  class='text-center p-t-90'>\n".
//     "<a class='txt1' href='register.php'>Not yet a member?</a>\n".
//     "<br />\n".
//   	"<a class='txt1' href='forgotPassword.php'>Forgot Password</a>\n".
//   	"</div>\n".
  	
// "</form>\n".
// "</div>\n".
// // "</div>\n".
// "</div>\n";


    
// }


function printloginForm() {
    
print    
    "<div class='well'>\n".
//     "<div class='banner-img'><img src='Images/3837.jpg' alt=''>\n".
// "<div class='banner-content'>\n".

"<div class='container'>\n".
 "<form class='form' method='post' action='login.php' >\n".
      	"<h2>Login </h2>\n".
             "<div class='well'>\n".
    "<div class='form-group'>\n".
      "<label for='userEmail'>Email:</label>\n".
      "<input type='email' class='form-control'  placeholder='Enter email' name='userEmail' style='height:50px'>\n".
      "</div>\n".
    "<div class='form-group'>\n".
      "<label for='userPassword'>Password:</label>\n".
      "<input type='password' class='form-control'  placeholder='Enter password' name='userPassword' style='height:50px'>\n".
    "</div>\n".
    "</div>\n".
    
    "<button type='submit' class='btn btn-primary' name='login_user'>Submit</button>\n".
    "<br />\n".
    "<br />\n".
    "<p> Not yet a member? <a href='register.php'>Sign up</a></p>\n".
  	"<p> Forgot your <a href='forgotPassword.php'>Password</a></p>\n".
  	"</div>\n".
  	
"</form>\n".
"</div>\n".
// "</div>\n".
// "</div>\n".
// "</div>\n".
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





    

    
            



