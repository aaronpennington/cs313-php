<?php 
    session_start();
    $_SESSION["cartCost"] = 0;

    $prices = array("11", "10", "12", "15", "10", "14", "15", "15", "19", "20", "13", "21", "16", "13", "12", "135", "121", "199");

    $books = array("Goodnight Moon", "Cat in the Hat","The Lion, the Witch, and the Wardrobe", "Harry Potter and the Sorcerer's Stone", "Ender's Game", "Book Thief", "Lord of the Rings", "Hunger Games", "Hitchhicker's Guide to the Galaxy", "1984", "Fahrenheit 451", "All Quiet on the Western Front", "Walden", "Immortal Life of Henrietta Lacks", "Outliers", "Code Complete", "University Physics", "Principles of Quantum Mechanics"); 
    
    $title="Bob's Books"; include "header.php"; ?>
<div class="container text-center main">
  <div class="row">
    <!-- <span class="col-sm" id="breadcrumb">All Categories</span> -->
    <h2 class="col-sm" id="allcategories">
      Categories
    </h2>
  </div>

  <?php 
    $i = 0;
  ?>

  <!--CHILDREN-->
  <div class="row">
    <p class="col-sm title">Children</p>
  </div>
  <div class="row categories" id="children">
    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/5/51/Goodnightmoon.jpg/220px-Goodnightmoon.jpg"
        alt="Goodnight Moon"><br>
      <span class="caption">Goodnight Moon</span>
      <?php include "prices.php"; $i++;?>
    </div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/Seuss-cat-hat.gif/220px-Seuss-cat-hat.gif"
        alt="Cat in the Hat"><br>
      <span class="caption">Cat in the Hat</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/8/86/TheLionWitchWardrobe%281stEd%29.jpg/220px-TheLionWitchWardrobe%281stEd%29.jpg"
        alt="The Lion, the Witch, and the Wardrobe"><br>
      <span class="caption">The Lion, the Witch, and the Wardrobe</span>
      <?php include "prices.php"; $i++; ?></div>

  </div>

  <!--YOUNG ADULT-->
  <p class="title">Young Adult</p>
  <div class="row categories" id="youngadult">

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/Harry_Potter_and_the_Sorcerer%27s_Stone.jpg/150px-Harry_Potter_and_the_Sorcerer%27s_Stone.jpg"
        alt="Harry Potter and the Sorcerer's Stone"><br>
      <span class="caption">Harry Potter and the Sorcerer's Stone</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/e/e4/Ender%27s_game_cover_ISBN_0312932081.jpg"
        alt="Ender's Game"><br>
      <span class="caption">Ender's Game</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/The_Book_Thief_by_Markus_Zusak_book_cover.jpg/220px-The_Book_Thief_by_Markus_Zusak_book_cover.jpg"
        alt="Book Thief"><br>
      <span class="caption">The Book Thief</span>
      <?php include "prices.php"; $i++; ?></div>

  </div>

  <!--SCI-FI-->
  <p class="title">Science Fiction / Fantasy </p>
  <div class="row categories" id="scifi">

    <div class="col-sm book"><img
        src="https://vignette.wikia.nocookie.net/lotr/images/d/db/51eq24cRtRL._SX331_BO1%2C204%2C203%2C200_.jpg/revision/latest?cb=20160701231234"
        alt="Lord of the Rings"><br>
      <span class="caption">Lord of the Rings</span>
      <?php include "prices.php"; $i++; ?>
    </div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/d/dc/The_Hunger_Games.jpg/220px-The_Hunger_Games.jpg"
        alt="Hunger Games"><br>
      <span class="caption">The Hunger Games</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img src="https://upload.wikimedia.org/wikipedia/en/b/bd/H2G2_UK_front_cover.jpg"
        alt="Hitchhicker's Guide to the Galaxy"><br>
      <span class="caption">Hitchhicker's Guide to the Galaxy</span>
      <?php include "prices.php"; $i++; ?></div>
  </div>

  <!--FICTION-->
  <p class="title">Fiction</p>
  <div class="row categories" id="fiction">

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/1984first.jpg/220px-1984first.jpg" alt="1984"><br>
      <span class="caption">1984</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img src="https://upload.wikimedia.org/wikipedia/en/d/db/Fahrenheit_451_1st_ed_cover.jpg"
        alt="Fahrenheit 451"><br>
      <span class="caption">Fahrenheit 451</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/All_Quiet_on_the_Western_Front_%281930_film%29_poster.jpg/220px-All_Quiet_on_the_Western_Front_%281930_film%29_poster.jpg"
        alt="All Quiet on the Western Front"><br>
      <span class="caption">All Quiet on the Western Front</span>
      <?php include "prices.php"; $i++; ?></div>

  </div>

  <!--NON-FICTION-->
  <p class="title">Non-Fiction</p>
  <div class="row categories" id="nonfiction">

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Walden_Thoreau.jpg/220px-Walden_Thoreau.jpg"
        alt="Walden"><br>
      <span class="caption">Walden</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/The_Immortal_Life_Henrietta_Lacks_%28cover%29.jpg/220px-The_Immortal_Life_Henrietta_Lacks_%28cover%29.jpg"
        alt="Immortal Life of Henrietta Lacks"><br>
      <span class="caption">The Immortal Life of Henrietta Lacks</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Outliers.png/220px-Outliers.png" alt="Outliers"><br>
      <span class="caption">Outliers</span>
      <?php include "prices.php"; $i++; ?></div>

  </div>

  <!--TEXTBOOKS-->
  <p class="title">Textbooks</p>
  <div class="row categories" id="textbooks">
    <div class="col-sm book"><img src="https://upload.wikimedia.org/wikipedia/en/5/58/Code_Complete_1st_edition.jpg"
        alt="Code Complete"><br>
      <span class="caption">Code Complete</span>
      <?php include "prices.php"; $i++; ?></div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/University_Physics.jpeg/220px-University_Physics.jpeg"
        alt="University Physics"><br>
      <span class="caption">University Physics</span>
      <?php include "prices.php"; $i++; ?> </div>

    <div class="col-sm book"><img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Principles_of_Quantum_Mechanics.jpg/220px-Principles_of_Quantum_Mechanics.jpg"
        alt="Principles of Quantum Mechanics"><br>
      <span class="caption">Principles of Quantum Mechanics</span>
      <?php include "prices.php"; $i++; ?></div>

  </div>
</div>

<!-- SIDEBAR -->
<div class="sidenav">
  <ul id="sidenav">
    <li><a href="#allcategories">All Categories</a></li>
    <li><a href="#children">Children</a></li>
    <li><a href="#youngadult">Young Adult</a>
    </li>
    <li><a href="#scifi">Science
        Fiction / Fantasy</a></li>
    <li><a href="#fiction">Fiction</a></li>
    <li><a href="#nonfiction">Non-Fiction</a>
    </li>
    <li><a href="#textbooks">Textbooks</a>
    </li>
  </ul>
</div>

</body>

</html>