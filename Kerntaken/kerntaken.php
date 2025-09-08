<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Kerntaken </title>
  <link rel="StyleSheet" href="/Kerntaken/kerntaken.css">
  <link rel="stylesheet" href="<?php echo '/styles/navigatie.css'; ?>">
  <link rel="icon" type="image/x-icon" href="/Homepagina/Favicon2.ico">
</head>

<body>
<?php require_once('../includes/mainmenu.inc.php'); ?>

  <main>
  <article>
      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K1-W1: Plant werkzaamheden en bewaakt de voortgang</div>
          <div class="card-side back">etails over het plannen en monitoren van werkzaamheden.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K1-W2: Ontwerpt software</div>
          <div class="card-side back">Details over het ontwerpen van softwarecomponenten.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K1-W3: Realiseert (onderdelen van) software</div>
          <div class="card-side back">Details over het bouwen en ontwikkelen van softwaremodules.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K1-W4: Test softwares</div>
          <div class="card-side back">Details over het testen en debuggen van softwareapplicaties.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K1-W5: Doet verbetervoorstellen voor de software</div>
          <div class="card-side back">Details over optimalisaties en verbeterprocessen voor software.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K2-W1: Voert overleg</div>
          <div class="card-side back">Details over samenwerking en communicatieve vaardigheden.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K2-W2: Presenteert het opgeleverde werk</div>
          <div class="card-side back">Details over presenteren, uitleggen en rapporteren van werk.</div>
        </div>
      </section>

      <section onclick="this.querySelector('.card').classList.toggle('flipped')">
        <div class="card">
          <div class="card-side front">B1-K2-W3: Reflecteert op het werk</div>
          <div class="card-side back">Details over reflectie, leerdoelen en zelfontwikkeling.</div>
        </div>
      </section>
    </article>
  </main>


</body>
</html>