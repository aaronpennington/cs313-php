<header>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Susan Bush</h1>
      <p>Susan is a teacher for VIP Kids</p>
    </div>
  </div>

  <div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="../week05/index.php">Home</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../week05/blog.php">Make Post</a>
          </li>
          <li class="nav-item">
            <?php 
              if (isset($_SESSION["user_id"])) {
                echo '<a class="nav-link" href="../week05/logout.php">Logout</a>';
              }
              else {
                echo '<a class="nav-link" href="../week05/login.php">Login</a>';
              }
            ?>
          </li>
        </ul>
      </div>
    </nav>
    <div>
      <?php 
        if ( isset( $_SESSION["display_name"] ) ) {
          echo "<p>Logged in as: " . $_SESSION["display_name"] . "</p>";
        } else {
            echo "<p>Not Signed In</p>";
        }
      ?>
    </div>
</header>