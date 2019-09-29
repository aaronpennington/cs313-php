<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="navbar-nav">
    <a class="nav-item nav-link 
    <?php
      if(isset($home) && !empty($home)) {
        echo $home;
      }
    ?>" href="./index.php">Home</a>
    <a class="nav-item nav-link <?php
      if(isset($assignments) && !empty($assignments)) {
        echo $assignments;
      }
    ?>" href="./assignments.php">Weekly Assignments</a>
    <a class="nav-item nav-link <?php
      if(isset($intro) && !empty($intro)) {
        echo $intro;
      }
    ?>" href="./introduction.php">Introduction Page</a>
  </div>
</nav>