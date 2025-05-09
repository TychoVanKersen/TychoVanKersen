<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>

  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel="StyleSheet" >
  <link rel="stylesheet" href="../Contact/Contact.css">
  <link rel="stylesheet" href="<?php echo '../styles/navigatie.css'; ?>">
  <link rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">


</head>

<body>
<?php require_once('../includes/mainmenu.inc.php'); ?>



<div class="scroll-container">
  <div class="wrapper centered">

  
  <article class="letter">
  <form action="mailto:519559@vistacollege.com"
        method="POST"
        enctype="multipart/form-data"
        name="EmailForm">
    <div class="side">
      <h1>Neem Contact op</h1>
      <br>
      <br>
      <p>Heb je vragen of wil je meer informatie?
        <br>
        <br>
        Mail mij gerust</p>
    </div>
    <div class="side">
        <button class="button1" id="sendLetter">Contact Hier</button>
    </div>
  </article>
  <div class="envelope front"></div>
  <div class="envelope back"></div>
</div>
</div>

<h2 class="result-message centered">Thank you for your message</h2>
  
  <script src="/Contact/Contact.js"></script>

</body>

</html>
