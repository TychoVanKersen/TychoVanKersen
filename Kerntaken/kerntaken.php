<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kerntaken</title>
  <link rel="stylesheet" href="/Kerntaken/kerntaken.css">
  <link rel="stylesheet" href="<?php echo '/styles/navigatie.css'; ?>">
  <link rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">
</head>

<body>
  <?php require_once('../includes/mainmenu.inc.php'); ?>

  <main>
    <article>
      <section>
        <div class="card">
          <div class="card-side front">B1-K1-W1:: Plant werkzaamheden en bewaakt de voortgang</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Wensen/eisen, planning en ontwerp</h2>
            <br>
            <h3>Opstarten project</h3> 
            <p>Meer tekst... meer tekst... meer tekst...</p>
            <h3>Plannen</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in fermentum orci. Donec tempor.</p>
           <h3>Bewaken voortgang </h3>
           <p>BLABLABLA</p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K1-W2: Ontwerpt software</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Software ontwerp</h2>
            <p> Het ontwerpen van de Software.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K1-W3: Realiseert software</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2> <b>Realisatie</b></h2>
            <p> Welke projecten heb ik ontwikkeld waar ik trots op ben.</p>
            <p> Als eerste de <a href="/Projecten/MagazijnappBuchem.php">MagBuchem applicatie</a> Een magazijn applicatie voor het IT magazijn van onze mentor </p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K1-W4: Test softwares</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Testen</h2>
            <p>Details over testen en debuggen van applicaties.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K1-W5: Doet verbetervoorstellen</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Verbeteringen</h2>
            <p>Uitleg over optimalisaties en verbeterprocessen.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K2-W1: Voert overleg</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Overleg</h2>
            <p>Details over samenwerking en communicatie.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K2-W2: Presenteert werk</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Presentatie</h2>
            <p>Uitleg en rapporteren van werk.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="card">
          <div class="card-side front">B1-K2-W3: Reflecteert</div>
          <div class="card-side back">
            <button class="close-btn">&times;</button>
            <h2>Reflectie</h2>
            <p>Zelfontwikkeling en leerdoelen.</p>
          </div>
        </div>
      </section>
    </article>
  </main>

  <!-- Splatter animation canvas -->
  <canvas id="splatter-canvas"></canvas>

  <!-- External JS -->
  <script src="/Kerntaken/kerntaken.js"></script>
</body>
</html>