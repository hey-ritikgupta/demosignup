<?php include('process.php') ?>
<html>
<head>
  <title>Registration Portal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post" action="register.php" id="register_form">
  	<h1>Register Now</h1>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
  		<input type="password"  placeholder="Password" name="password">
  	</div>
  	<div>
  		<button type="submit" name="register" id="reg_btn">Register</button>
  	</div>
  </form>
  </body>
</html>
