<?php  include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="utf-8">-->
    <!--<meta name="viewport" content="width=device-width">-->
    <title>reverME Student Services | Welcome</title>
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
      <a class="navbar-brand" href="http://malkhud2.create.stedwards.edu/TSM/index.php">reverME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="dropdown">-->
        <!--  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Apply As<span class="caret"></span></a>-->
        <!--  <ul class="dropdown-menu">-->
        <!--    <li><a href="http://malkhud2.create.stedwards.edu/TSM/tutorForm.php">Tutor</a></li>-->
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
  <h2>Login </h2>
  <form method="post" action="forgotPassword.php">
      	<?php include('errors.php'); ?>
             <div class="well">
    <div class="form-group">
      <label for="userEmail">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="userEmail" style="height:50px">
      </div>
    <div class="form-group">
      <label for="password_1">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password_1" style="height:50px">
    </div>
    <div class="form-group">
      <label for="password_2">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password_2" style="height:50px">
    </div>
    </div>
    
        <div class="container">
    <button type="submit" class="btn btn-default" name="rest_password">Submit</button>
    </div>
    
    <p> Not yet a member? <a href="register.php">Sign up</a></p>
  	<p> Forgot <a href="forgotPassword.php">Password</a></p>
  	</div>
  	
</form>

</div>
</div>
    
   <footer class="container-fluid text-center">
  <p>referME, 2018-2019, ST.EDWARDS.EDU</p>
</footer>
    
</body>
   
</html>


   
    
            



