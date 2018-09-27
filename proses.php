<!DOCTYPE html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

 <center><h2>LOGIN</h2>  
  
  <div class="login">
  <br/>
    <form action="TA.php" method="post" onSubmit="return validasi()">
      <div>
        <label>Username:</label>
        <br/>
        <input type="text" name="username">
        <br/>
      </div>
      <div>
        <label>Password:</label>
        <br/>
        <input type="password" name="password">
        <br/>
      </div>     
      <div>
        <input type="submit" value="Login" class="tombol">
      </div>
    </form>
  </div>
</body>
 </CENTER>
</html>
