<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="utf-8">-->
    <!--<meta name="viewport" content="width=device-width">-->
    <title>referME Student Services | Welcome</title>
    <!--<link rel="stylesheet" href="./CSS/TSMstyle.css">-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./CSS//TSMstyle.css" type="text/css" /> 
</head>  

<body>
  
    <header>
        <div class="row">
            <div>
                <img class="img-responsive" src="./Images/reverME.png" alt="Chania" width="460" height="345">
                <!--<h1 class="col-sm-4"> <img src="./Images/reverME.png"> </h1>-->
            </div>
          </div>
    </header> 
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://malkhud2.create.stedwards.edu/TSM/index.php">referME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="dropdown">-->
        <!--  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Apply As<span class="caret"></span></a>-->
        <!--  <ul class="dropdown-menu">-->
        <!--    <li><a href="http://malkhud2.create.stedwards.edu/TSM/tutorForm.php">Touter</a></li>-->
        <!--    <li><a href='http://malkhud2.create.stedwards.edu/TSM/clubForm.php'>Club Member</a></li>-->
        <!--  </ul>-->
        <!--</li>-->
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://malkhud2.create.stedwards.edu/TSM/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="http://malkhud2.create.stedwards.edu/TSM/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="well">
    
        
            
       <div class="container">
  <form class="form" method="post" action="register.php">
      <h2>Register </h2>
      <?php include('errors.php'); ?>
      <div class="well">
    <div class="form-group">
      <label for="userFirstName">First name:</label>
      <input type="text" class="form-control"  placeholder="Enter first Name" name="userFirstName" style="height:50px">
    </div>
     <div class="form-group">
      <label for="userLastName">Last Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Last Name" name="userLastName" style="height:50px">
    </div>
     <div class="form-group">
      <label for="userEmail">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter Email" name="userEmail" style="height:50px">
    </div>
     <div class="form-group">
      <label for="userMajor">Major:</label>
      <input type="text" class="form-control"  placeholder="Enter major" name="userMajor" style="height:50px">
    </div>
     <div class="form-group">
      <label for="userUniversity">University:</label>
      <input type="text" class="form-control"  placeholder="Enter University" name="userUniversity" style="height:50px">
    </div>
    <div class="form-group">
      <label for="userPassword">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password_1" style="height:50px">
    </div>
    <div class="form-group">
      <label for="userPassword">Confirm password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password_2" style="height:50px">
    </div>
    </div>
    
    <div class="input-group">
    <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
    </div>
    
    <p> Already a member? <a href="login.php">Login </a></p>
  </form>
      </div>
    
   </div> 
   
   
    
   <footer class="container-fluid text-center">
  <p>referME, 2018-2019, ST.EDWARDS.EDU</p>
</footer>
    
</body>
   
</html>


   
    
            



