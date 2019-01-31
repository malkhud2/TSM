<?php  include('server.php'); ?>
<?php include('errors.php'); ?>
<?php 
session_start();

print_r($_SESSION);

printTop();

if(isset($_SESSION['userEmail']) && $_SESSION['userPassword']) {
// if ($_SESSION['userEmail'] == $userEmail) {

    print 
printbookForm();


// printloginForm();

$conn = dbConnect();

returnTutorForm($conn);

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
    



function printbookForm() {
    
print    
"<div class='well'>\n".
    "<div class='container'>\n".
        "<h2>New book Ad</h2>\n".
            "<form method='post' action='book_new_post.php' >\n".
    // "<div class='container'>\n".
"<button type='submit' class='btn btn-primary' name='new_ad'>New Book Ad</button>\n".
"</div>\n".
"</form>\n".
// "</div>\n".
// "</div>\n".
// "</div>\n".
// "</div>\n".
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
$sql = "SELECT * FROM books ORDER BY book_id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $book_title = $row['book_title'];
    $book_isbn = $row['book_isbn'];
    $book_price = $row['book_price'];
    $book_date = $row['book_date'];
    $book_info = $row['book_info'];
    $book_image = $row['book_image'];
    
    
    echo  "<div class='well'>\n".
"<div class='container'> \n".
  "<div class='row'>\n".
    "<div class='col-sm-12'>\n";
    
    echo        
    '<p>Book Name: ';

    

    $links = array();
    $parts = explode(',', $row['book_title']);
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
    
// echo
// "<div class='well'>\n".
// "<div class='container'> \n".
//   "<div class='row'>\n".
//     "<div class='col-sm-12'>\n".
    
// "<div class='table-responsive'>     
// <table class='table'>
// <thead>
// <tr>
// <th>Title</th>
// <th>ISBN</th>
// <th>Price</th>
// <th>Date</th>
// <th>Info</th>
// <th>Image</th>
// </div>
//     </div>
//   </div>
// </div><br>
// </tr>";


// echo "<tr>";
//     echo "<td align='center'> {$book_title}</td>";
//     echo "<td align='center'>{$book_isbn}</td>";
//     echo "<td align='center'>{$book_price}</td>";
//     echo "<td align='center'> {$book_date}</td>";
//     echo "<td align='center'>{$book_info}</td>";
//     echo "<td align='center'>{$book_image}</td>";
//     echo "</tr>";
// }

//     echo "</table>";
    
// } else {
// echo "0 results";
// }

// }


function printloginForm() {
    
print    
"<div class='well'>\n".
"<div class='container'> \n".
  "<div class='row'>\n".
    "<div class='col-sm-4'>\n".
      "<div class='panel panel-primary'>\n".
        "<div class='panel-heading'>In Search of Lost Time by Marcel Proust</div>\n".
        "<div class='panel-body'><img src='https://placehold.it/150x80?text=NEWBOOK' class='img-responsive' style='width:100%' alt='Image'></div>\n".
        "<div class='panel-footer'>Swann's Way, the first part of A la recherche de temps perdu, Marcel Proust's seven-part cycle, was published in 1913. In it, Proust introduces the themes that run through the entire work. </div>\n".
      "</div>\n".
    "</div>\n".
    "<div class='col-sm-4'> \n".
      "<div class='panel panel-danger'>\n".
        "<div class='panel-heading'>Don Quixote by Miguel de Cervantes</div>\n".
        "<div class='panel-body'><img src='https://placehold.it/150x80?text=NEWBOOK' class='img-responsive' style='width:100%' alt='Image'></div>\n".
        "<div class='panel-footer'>Alonso Quixano, a retired country gentleman in his fifties, lives in an unnamed section of La Mancha with his niece and a housekeeper.</div>\n".
      "</div>\n".
    "</div>\n".
    "<div class='col-sm-4'> \n".
      "<div class='panel panel-success'>\n".
        "<div class='panel-heading'>Ulysses by James Joyce</div>\n".
        "<div class='panel-body'><img src='https://placehold.it/150x80?text=NEWBOOK' class='img-responsive' style='width:100%' alt='Image'></div>\n".
        "<div class='panel-footer'>Ulysses chronicles the passage of Leopold Bloom through Dublin during an ordinary day, June 16, 1904.</div>\n".
      "</div>\n".
    "</div>\n".
    "</div>\n".
  "</div>\n".
"</div><br>\n";


    
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





    

    
            



