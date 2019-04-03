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
        <h1>Blogg</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
<?php
  require "../templates/NavMeny.php";
?>
    
    <main>
        <h2>Min blogg</h2>
       
        <!-- Inlägg ska hämtas från en databas eller laddas in via ett formulär-->
        <article>
          <h3>En artikel om hundar</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>En hund är ett fyrbent djur</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
          
          <!--Kommentarer-->
          <article>
            <h4>Intressant artikel</h4>
            <p><small>Postad 2019-02-12 av Kalle</small></p>
            <p class="italic">Mycket läsvärt om hundar</p>
          </article>
         
        </article>
        <article>
          <h3>En artikel om katter</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>En katt är också ett fyrbent djur</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
        </article>
        
        <article>
          <h3>En artikel om fiskar</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>En fisk lever i vattnet</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
        </article>
    </main>
    
<?php
  require "../templates/Footer.php";
?>
  </div>
</body>
</html>
