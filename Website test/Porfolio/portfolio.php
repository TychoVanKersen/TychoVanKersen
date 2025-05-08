<?php
$page = "portfolio"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Portfolio </title>
  <link rel="StyleSheet" href="/Porfolio/Portfolio.css">
  <link rel="stylesheet" href="<?php echo '/styles/navigatie.css'; ?>">
  <link rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">

</head>

<body>
<p></p><p></p>

  <?php require_once('../includes/mainmenu.inc.php'); ?>

  <br>
  <br>

  <header>
    <div class="header">
      <span class="header-text">
        <h1>Mijn Portfolio</h1>
      </span>
    </div>
  </header>

  <?php include '../includes/skillbar.inc.php'; ?>

<br>
<br>

  <div class="searchcontainer">
    <input id="searchbar" onkeyup="search_card()" z type="text" name="search" placeholder="Search Sprints..">
  </div>

  <section class="cards-wrapper" id="sprintlist">

    <?php require_once('../includes/cards.inc.php'); ?>

  </section>





  <script src="/Porfolio/Portfolio.js"></script>
</body>

</html>  

<!-- https://www.sliderrevolution.com/resources/css-animations-on-scroll/ Trigger a css animation on the scroll--> 