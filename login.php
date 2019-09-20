<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="CSS/welcome.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
  </head>
  <body id="forms">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container"> 
            <a class="navbar-brand" href="/"> <span>X</span>-el </a> 
            <button class="navbar-toggler"type="button"data-toggle="collapse" 
            data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent"aria-expanded="false"aria-label="Toggle navigation">   
             <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse"id="navbarSupportedContent">   
              <ul class="navbar-nav ml-auto"> 
                
               <li> 10 Man Team!</li>
                
                
                </ul>
             
              
  
               
            </div>
          
         </nav>
   
    <div id="login">
      <div  id="header">
          <h2>User Log in</h2>
          <p>Don't have an account yet? <a href="register.php" id="signup-link">sign up</a> now </p>
          <form action="login.php" method="POST" id="form">
          <?php include('errors.php'); ?>
            <input type="text" name="username" placeholder="User ID">
            <input type="password" name="pword" placeholder="********">
            <input type="submit" value="LOGIN" name="login_user">
    
          </form>
      </div>
      <p>Forgot <a href="#">password</a>? </p>
      
    </div>
    
       
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
  </body>


</html>
