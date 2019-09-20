<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/welcome.css">
	<title>Team Excel</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container"> 
            <a class="navbar-brand" href="index.php"><h3>X-el</h3></a> 

            <div class="collapse navbar-collapse">   
                
                <ul class="nav navbar ml-auto" >
                    <li class="nav-item"><a href="login.php?logout='1'" class="btn btn-outline-light">Logout</a> </li> 
                        
                </ul>  
            </div>
        </div>
    </nav>

     <div class="welcome-text">
         <h2>WELCOME PAGE</h2>
     </div>

    <div class="content">
  	    <!-- notification message -->
  	    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
      	    <h3>
                 <?php 
          	    echo $_SESSION['success']; 
            	unset($_SESSION['success']);
                    ?>
      	    </h3>
        </div>
    	<?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
    	    <p>Welcome onboard <strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
      
    </div>  
     
</body>
</html>