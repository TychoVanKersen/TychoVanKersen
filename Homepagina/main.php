<?php 
    $page = "main"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tycho's Portfolio</title>

    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel="StyleSheet">
    <link rel="stylesheet" href="/Homepagina/Style.css">
    <link rel="stylesheet" href="<?php echo '/styles/navigatie.css'; ?>">
    <link rel="stylesheet" href="<?php echo '/styles/loading.css'; ?>">
    <link rel="stylesheet" href="<?php echo '/styles/downindicator.css'; ?>">  
    <link  rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/CSSRulePlugin.min.js"></script>
</head>

<body>  
    <!-- Main menu -->
    <?php require_once('../includes/mainmenu.inc.php'); ?>

    <div id="scrollable" class="scroll-container">
        <div class="text-overlay">
            <h2 class="text_shadows">Welkom!</h2>
            <p id="aboutText">
                <b>Ik ben Tycho </b><br><br>
                Ik ben een enthousiaste Software Develepor met een grote passie voor Webdevelopment.<br>
                Deze website is een kijkje in mijn wereld – een verzameling van projecten en vaardigheden waar ik de laaste jaren met plezier aan gewerkt heb. <br> 
                Of je nu hier bent uit nieuwsgierigheid of een potentiële samenwerking overweegt, neem gerust een kijkje en laat van je horen.<br>
                Ik hoop dat ik je kan inspireren!"<br>
            </p>

           <img id="transitionImage" src="/Foto_Website/20230526_120105.jpg">

            <p>
                <b> Wie en Wat: </b><br><br>
                <a id="age-box">Ik ben </a> 
                en specialiseer in Webdedvelopment. <br>
                Dit portfolio is gemaakt in PHP en Javascript, maar geeft ook een inzicht in mijn kennis over andere codeertalen. <br> 
            </p>

            <img id="transitionImage" src="/Foto_Website/20220716_160134.jpg">

      <p>Laten we  
    <span class="btn js-trigger-transition" 
          data-target="../Porfolio/portfolio.php" 
          style="cursor: pointer; color: white; text-decoration: underline;">
        Beginnen
    </span>
</p>
        </div>
    </div>



    <?php require_once('../includes/loading.php'); ?>
    
    <script defer src="Info.js"></script>
</body>

</html>