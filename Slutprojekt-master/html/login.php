<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Mall för slutprojekt</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body id="blog">
  <div id="wrapper">
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Logga in</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
<?php
  require "../templates/NavMeny.php";
?>
    
    <main>
        <h2>Inloggning</h2>
       
        <form action="process.php" method="POST">
          
          <label>Email</label>
          <input type="text" id="Email" name="Email"><br><br>
          
          <label>Lösenord:</label>
          <input type="password" id="pass" name="pass"><br><br>
          
          <input type="submit" id="btn"value="Login">
		  <br><br> Har inget konto? <a href="registera.html">Registera här!</a>
        </form>
       
    </main>
    
<?php
  require "../templates/Footer.php";
?>
  </div>
</body>
</html>
