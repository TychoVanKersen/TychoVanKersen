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
    <link  rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/CSSRulePlugin.min.js"></script>
</head>

<body>

    <!-- Main menu -->
    <?php require_once('../includes/mainmenu.inc.php'); ?>

    <div id="scrollable" class="scroll-container">
        <div class="text-overlay">
            <p id="aboutText" class="textbox">
                <b>Ik ben Tycho</b><br><br>
                Een enthousiaste Software Developer met een grote passie voor webdevelopment.<br>
                Deze website is een kijkje in mijn wereld – een verzameling van projecten en vaardigheden waar ik de laatste jaren met plezier aan gewerkt heb.<br>
                Of je nu hier bent uit nieuwsgierigheid of een potentiële samenwerking overweegt, neem gerust een kijkje en laat van je horen.<br>
                Ik hoop dat ik je kan inspireren!
            </p>

            <img id="transitionImage" class="floating" src="/Foto_Website/20230526_120105.jpg" alt="Tycho's foto">

            <p class="textbox">
                <b>Wie en Wat:</b><br><br>
                <span id="age-box">Ik ben 24 jaar</span> en gespecialiseerd in webdevelopment.<br>
                Dit portfolio is gebouwd in PHP en JavaScript, maar toont ook mijn ervaring met andere programmeertalen.
            </p>

            <img id="transitionImage" class="floating" src="/Foto_Website/20220716_160134.jpg" alt="Werkvoorbeeld">

            <p>
                Laten we 
                <span class="btn js-trigger-transition" data-target="../Porfolio/portfolio.php">
                    Beginnen
                </span>
            </p>
        </div>
    </div>

    <?php require_once('../includes/loading.php'); ?>

    <script>
        document.querySelector('.js-trigger-transition').addEventListener('click', function () {
            const target = this.getAttribute('data-target');
            document.body.style.opacity = 0;
            setTimeout(() => {
                window.location.href = target;
            }, 300);
        });

        window.addEventListener('load', () => {
            document.body.style.opacity = 1;
            document.body.style.transition = 'opacity 1.6s ease-in-out';
        });
    </script>
</body>

</html>