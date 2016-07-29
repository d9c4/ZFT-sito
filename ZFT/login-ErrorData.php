<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>ZFT LOGIN</title>
</head>

<body>
<form action="login.php" method="POST">
  <h1>Log in</h1>
  <div class="inset">
    <p>
      <label for="username">User o Indirizzo E-mail </label>
      <input type="text" name="username" id="username" />
    </p>
    <p>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" />
    </p>
    <p>
      
         <p class='ErrorData'>
 		 <span>Username o Password errati!</span>  
      </p>
      
     </div>
<p class="p-container"> <span>Password dimenticata?</span>
    <input type="submit" name="go" id="go" value="Log in" />
  </p>
</form>
</body>

</html>