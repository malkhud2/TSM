<?php




// initializing variables
$userId = "";
$userEmail = "";
$userFristName = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'malkhudc_TSM', '1m4a1m2K', 'malkhudc_TSM-2018');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $userFirstName = mysqli_real_escape_string($db, $_POST['userFirstName']);
  $userLastName = mysqli_real_escape_string($db, $_POST['userLastName']);
  $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
  $userMajor = mysqli_real_escape_string($db, $_POST['userMajor']);
  $userUniversity = mysqli_real_escape_string($db, $_POST['userUniversity']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($userFirstName)) { array_push($errors, "First Name is required"); }
  if (empty($userLastName)) { array_push($errors, "Last Name is required"); }
  if (empty($userEmail)) { array_push($errors, "Email is required"); }
  if (empty($userMajor)) { array_push($errors, "Major is required"); }
  if (empty($userUniversity)) { array_push($errors, " University Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match"); 
      }
  
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE userEmail='$userEmail'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userEmail'] === $userEmail) {
      array_push($errors, "email already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$userPassword = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user ( userFirstName, userLastName, userEmail, userMajor, userUniversity, userPassword) 
  			  VALUES( '$userFirstName', '$userLastName','$userEmail', '$userMajor','$userUniversity', '$userPassword')";
  	mysqli_query($db, $query);
  	$_SESSION['userEmail'] = $userEmail;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}






if (isset($_POST['btn-tutor-form'])) {
  // receive all input values from the form
  $tform_GBA = mysqli_real_escape_string($db, $_POST['tform_GBA']);
  $tform_skill = mysqli_real_escape_string($db, $_POST['tform_skill']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($tform_GBA)) { array_push($errors, "GPA is required"); }
  if (empty($tform_skill)) { array_push($errors, "SKILL is required"); }
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM tutorForm WHERE tform_GBA='$tform_GBA'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['tform_GBA'] === $tform_GBA) {
      array_push($errors, "email already exists");
    }

  }
  
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO tutorForm (tform_GBA, tform_skill) 
  			  VALUES('$tform_GBA', '$tform_skill')";
  	mysqli_query($db, $query);
  	$_SESSION['tform_GBA'] = $tform_GBA;
  	$_SESSION['success'] = "Tour Request has been send, wait for aprove";
  	header('location: homepage.php');
  }
}




if (isset($_POST['new_book'])) {
  // receive all input values from the form
  $book_title = mysqli_real_escape_string($db, $_POST['book_title']);
  $book_isbn = mysqli_real_escape_string($db, $_POST['book_isbn']);
  $book_price = mysqli_real_escape_string($db, $_POST['book_price']);
  $book_info = mysqli_real_escape_string($db, $_POST['book_info']);
//   $book_image = mysqli_real_escape_string($_FILES['image']['name']);
//   $book_image_temp = mysqli_real_escape_string($_FILES['image']['tmp_name']);
  
  
  move_uploaded_file($book_image_temp, "../Images/$book_image" );


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($book_title)) { array_push($errors, "Title is required"); }
  if (empty($book_isbn)) { array_push($errors, "ISBN is required"); }
  if (empty($book_price)) { array_push($errors, "Price is required"); }
  if (empty($book_info)) { array_push($errors, "Info is required"); }
//   if (empty($book_image)) { array_push($errors, "Image is required"); }
  
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM books WHERE book_title='$book_title'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['book_title'] === $book_title) {
      array_push($errors, "Title already exists");
    }

  }
  
  
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO books (book_title, book_isbn, book_price, book_date, book_image, book_info ) 
  			  VALUES('$book_title', '$book_isbn', '$book_price', now(), '$book_image', '$book_info')";
  	mysqli_query($db, $query);
  	$_SESSION['book_title'] = $book_title;
  	$_SESSION['success'] = "you add a new book post";
  	header('location: books.php');
  }
}



//  This is for Tutor ==>

if (isset($_POST['new_tutor'])) {
  // receive all input values from the form
  $tutor_class = mysqli_real_escape_string($db, $_POST['tutor_class']);
  $tutor_time = mysqli_real_escape_string($db, $_POST['tutor_time']);
  $tutor_price = mysqli_real_escape_string($db, $_POST['tutor_price']);
  $tutor_date = mysqli_real_escape_string($db, $_POST['tutor_date']);
  $tutor_loucation = mysqli_real_escape_string($db, $_POST['tutor_loucation']);

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($tutor_class)) { array_push($errors, "Title is required"); }
  if (empty($tutor_time)) { array_push($errors, "ISBN is required"); }
//   if (empty($tutor_price)) { array_push($errors, "Price is required"); }
  if (empty($tutor_date)) { array_push($errors, "Info is required"); }
  if (empty($tutor_loucation)) { array_push($errors, "Info is required"); }
//   if (empty($book_image)) { array_push($errors, "Image is required"); }
  
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM tutors WHERE tutor_id='$tutor_id'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['tutor_id'] === $tutor_id) {
      array_push($errors, "Title already exists");
    }

  }
  
  
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO tutors (tutor_class, tutor_time, tutor_price, tutor_date, tutor_loucation ) 
  			  VALUES('$tutor_class', '$tutor_time', '$tutor_price', '$tutor_date', '$tutor_loucation')";
  	mysqli_query($db, $query);
  	$_SESSION['tutor_id'] = $tutor_id;
  	$_SESSION['success'] = "you add a new book post";
  	header('location: tutor.php');
  }
}




#######################################################################

  $msg = "";

    // if upload button is pressed
    if (isset($_POST['upload'])) {
        
        // THE PATH TO STORE THE UPLOADED IMAGE
        $target = "images/".basename($_FILES['image']['name']);
        
        // CONNECT TO THE DATABASE
        $db = mysqli_connect("localhost", "salzaidy_COSC37", "QAZ135qaz", "salzaidy_photos");
        
        // GET ALL THE SUBMITTED DATA FROM THE FORM
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];
        
        $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
        mysqli_query($db, $sql); // STORES THE SUBMITTED DATA INTO THE DATABASE TABLE: image
        
        //NOW LET'S MOVE THE UPLOADED IMAGE INTO THE FOLDER: image
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = " There was a problem uploading image";
        }
    }


##########################################################

##########################################################

##########################################################

//  This is for club ==>

if (isset($_POST['new_club'])) {
  // receive all input values from the form
  $target = "Images/".basename($_FILES['club_image']['name']);
  $club_name = mysqli_real_escape_string($db, $_POST['club_name']);
  $club_dis = mysqli_real_escape_string($db, $_POST['club_dis']);
//   $club_image = mysqli_real_escape_string($_FILES['club_image']['name']);
//   $club_image_temp = mysqli_real_escape_string($_FILES['image']['tmp_name']);
  
//   $target = "Images/".basename($_FILES['image']['name']);
  
//   move_uploaded_file($club_image_temp, "../Images/$club_image" );

    move_uploaded_file($_FILES['club_image']['tmp_name'], $target);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
  if (empty($club_name)) {array_push($errors, "club name is required"); }
  if (empty($club_dis)) { array_push($errors, "ISBN is required");}
//   if (empty($book_image)) { array_push($errors, "Image is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM clubs WHERE club_name='$club_name'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['club_name'] === $club_name) {
      array_push($errors, "club Name already exists");
    }

  }
  
  
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO clubs (club_name, club_dis, club_image ) 
  			  VALUES('$club_name', '$club_dis','$club_image')";
  	mysqli_query($db, $query);
  	$_SESSION['club_name'] = $club_name;
  	$_SESSION['success'] = "you add a new book post";
  	header('location: clubs.php');
  }
}


##########################################################

##########################################################

##########################################################


if (isset($_POST['new_event'])) {
  // receive all input values from the form
  $event_title = mysqli_real_escape_string($db, $_POST['event_title']);
  $event_location = mysqli_real_escape_string($db, $_POST['event_location']);
  $event_info = mysqli_real_escape_string($db, $_POST['event_info']);
  $event_image = mysqli_real_escape_string($db, $_POST['event_image']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($event_title)) { "<div class='alert alert-warning'>\n". array_push($errors,  "event title is require"); 
  "</div>\n";}
  if (empty($event_location)) { array_push($errors, "event location is required"); }
  if (empty($event_info)) { array_push($errors, "event info is required"); }
  
  
// LIMIT 1
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM events WHERE event_title='$event_title' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['event_title'] === $event_title) {
      array_push($errors, "event name already exists");
    }

  }
  
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO events (event_title, event_location, event_info, event_image) 
  			  VALUES('$event_title', '$event_location', '$event_info', event_image)";
  	mysqli_query($db, $query);
  	$_SESSION['event_title'] = $event_title;
  	$_SESSION['success'] = "Event has been send, wait for aprove";
  	header('location: events.php');
  }
}


##########################################################

##########################################################

##########################################################



if (isset($_POST['btn-club-form'])) {
  // receive all input values from the form
  $cform_Name = mysqli_real_escape_string($db, $_POST['cform_Name']);
  $cform_des = mysqli_real_escape_string($db, $_POST['cform_des']);
  $cform_email = mysqli_real_escape_string($db, $_POST['cform_email']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($cform_Name)) { "<div class='alert alert-warning'>\n". array_push($errors,  "club name is require"); 
  "</div>\n";}
  if (empty($cform_des)) { array_push($errors, "club descruption is required"); }
  if (empty($cform_email)) { array_push($errors, "club email is required"); }
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM clubForm WHERE cform_Name='$cform_Name'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['cform_Name'] === $cform_Name) {
      array_push($errors, "email already exists");
    }

  }
  
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO clubForm (cform_Name, cform_des, cform_email) 
  			  VALUES('$cform_Name', '$cform_des', '$cform_email')";
  	mysqli_query($db, $query);
  	$_SESSION['cform_Name'] = $cform_Name;
  	$_SESSION['success'] = "Tour Request has been send, wait for aprove";
  	header('location: homepage.php');
  }
}









if (isset($_POST['login_user'])) {
  $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
  $userPassword = mysqli_real_escape_string($db, $_POST['userPassword']);
//   $user_role = mysqli_real_escape_string($db, $_POST['user_role']);

  if (empty($userEmail)) {
  	array_push($errors, "Username is required");
  }
  if (empty($userPassword)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$userPassword = md5($userPassword);
  	$query = "SELECT * FROM user WHERE userEmail='$userEmail' AND userPassword='$userPassword'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  session_start();
  	  $_SESSION['userEmail'] = $userEmail;
  	  $_SESSION['userPassword'] = $userPassword;
  	  $_SESSION['user_role'] = $user_role;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homepage.php?loginSuccessfully');
  	  
  	}else {
  		array_push($errors, "Wrong user_name/password combination");
  	}
  }
}




if (isset($_POST['rest_password'])) {
  $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

if (empty($userEmail)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match"); }
	
  if (count($errors) == 0) {
  	$userPassword = md5($password_1);
  	$query = "UPDATE user SET userPassword='$userPassword' where userEmail='$userEmail'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) != 1) {
  	  $_SESSION['userPassword'] = $userPassword;
  	  $_SESSION['success'] = "Your password updated";
  	  header('location: login.php');
  	}else {
  		array_push($errors, "Wrong password combination");
  	}
  }
}


?>