<?php 
  $db = mysqli_connect('localhost', 'jerryhos_signupdemo', '12345', 'jerryhos_signupdemo');
  $email = "";
  if (isset($_POST['register'])) {
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  
  	$e_varify = "SELECT * FROM demotable WHERE email='$email'";
  	$e_check = mysqli_query($db, $e_varify);

      if(mysqli_num_rows($e_check) > 0){
  	  $email_error = "User is alreday Registred!"; 	
  	}else{
           $query = "INSERT INTO demotable (email, password) 
      	    	  VALUES ('$email', '".md5($password)."')";
           $results = mysqli_query($db, $query);
          echo '<script type="text/javascript">alert("Registration Sucesssfull");</script>';
           exit();
  	}
  }
?>
