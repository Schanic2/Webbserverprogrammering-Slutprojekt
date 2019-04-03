<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Mall för slutprojekt</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Välkomna till Johans Hemköp</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
<?php
  require "../templates/NavMeny.php";
?>
    
    <main>
        <p>Välkomna till min wadawd nya blogg som handlar om djur. Här kan ni diskutera och ställa frågor om djur som
        ni är intresserade av.</p>
        
        <p>För att skriva på bloggen måste ni vara registrerade och ha ett användarkonto. Det kostar inget
        att registrera sig och skriva på bloggen.</p>
        
    </main>
    
<?php
  require "../templates/Footer.php";
?>
</body>
</html>
