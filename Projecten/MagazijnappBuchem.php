<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MagBuchem </title>

    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel="StyleSheet">
    <link rel="StyleSheet" href="<?php echo '/styles/project_cards.css'; ?>">
    <link rel="stylesheet" href="<?php echo '/styles/navigatie.css'; ?>">
    <link rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">

</head>

<body>
    <style>
        body {
            margin: 0;
            background-attachment: fixed;
            background-image: url(/Foto_Website/Screenshot\ 2025-01-28\ 100651.png);
            background-size: cover;
            background-repeat: repeat-y;
            background-attachment: fixed;
        }
    </style>

    <?php require_once('../includes/mainmenu.inc.php'); ?>

    <header> 
        <div class="header">
            <span class="header-text">
                <h1>Magazijnapp Buchem </h1>
            </span>
        </div>
    </header>

    <div class="content-container">
        <!-- Left Button -->
        <a href="https://magbuchem.nl/"
            class="button">Website</a>

        <div id="text-container">
            <div id="text1"> <b> Magazijnapp Buchem </b><br><br>
             Lorem ipsum odor amet, consectetuer adipiscing elit.<br>
             Penatibus sem cubilia interdum ipsum ligula. Litora vulputate facilisis id donec quisque vivamus.<br>
             Dis dignissim tellus vestibulum, leo nunc porttitor tellus.<br>
             Non blandit montes eleifend at in maecenas curabitur leo.<br>
             Ipsum ornare commodo semper volutpat mollis dictum. Purus erat donec ligula parturient ex primis at ipsum.<br>
             Bibendum urna praesent elit donec sit rutrum.<br>
             Imperdiet praesent class ornare lobortis tristique; a habitasse tempor.
             <br>
            </div>
        </div>  



        <a href="/Porfolio/portfolio.php" class="button">Back to Overview</a>
    </div>





</body>

</html>