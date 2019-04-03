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
        <h1>Administration</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
<?php
  require "../templates/NavMeny.php";
?>
    
    <main>
        <h2>Inloggning</h2>
       
        <form>
          <label for="username">Användarnamn:</label>
          <input type="text" id="username" name="user"><br><br>
          <label for="password">Lösenord:</label>
          <input type="password" id="password" name="password"><br><br>
          <input type="submit" value="Logga in">
        </form>
       
    </main>
    
    <!--Ska ligga i egen fil-->
  <?php
  require "../templates/Footer.php";
?>
  </div>
</body>
</html>
