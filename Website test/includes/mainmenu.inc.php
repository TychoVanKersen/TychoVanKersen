<div id="container">
        <div class="navT">
            <div class="Hamburger-Context-Box" onclick="toggleMenu()"></div>
            <div class="icon"></div>
          </div>

    <div id="menu">
            <ul>
                <li><a href="/Homepagina/main.php">Home</a></li>
                <li><a href="#">Persoonlijke Feedback</a></li>
                <li><a href="/Porfolio/portfolio.php">Portfolio</a></li>
                <li><a href="/Kerntaken/kerntaken.php">Kerntaken</a></li>
                <li><a href="/Contact/Contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
  


  

  <script>
    function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("open");
    var navT = document.querySelector(".navT");
    navT.classList.toggle("active");
  }
  </script>