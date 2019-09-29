<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php include 'links.php'; ?>
  <title>Aaron Pennington Homepage</title>
</head>

<body>
  <?php 
    $home = "active";
    include 'header.php'; 
  ?>
  <div class="container-fluid bg-1 text-center">
    <h1 class="title">Hi, I'm <br> Aaron Pennington</h1>
    <img src="../assets/me1000x.jpg" alt="Me" id="profilePic" class="rounded-circle"
      onmouseover="this.style.cursor='pointer'" onclick="imageClick()">
    <h3>I am a Computer Science student at BYU-Idaho, with a
      passion for software development and machine learning!</h3>

    <hr>
    <h3 class="contact">Contact Me</h3>
    <!--Links to Github, Email, & Linkedin here -->
    <a href="https://www.github.com/aaronpennington"><img src="../assets/github.png" alt="Github" class="img-icons"></a>
    <a href="https://www.linkedin.com/in/b-aaron-pennington"><img src="../assets/linkedin.png" alt="Linkedin"
        class="img-icons"></a>
    <a href="mailto:pen17020@byui.edu"><img src="../assets/email.png" alt="Email" class="img-icons"></a>

    <footer>
      <h3>Additional Links</h3>
      <a href="./assignments.html">Weekly Assignments</a>
      <br>
      <a href="./introduction.html">Introduction Page</a>
    </footer>
  </div>

  <script>
  var toggle = true;

  function imageClick() {
    if (toggle === true) {
      document.getElementById("profilePic").src = "../assets/c_h_square.jpg";
    } else {
      document.getElementById("profilePic").src = "../assets/me1000x.jpg";
    }
    toggle = !toggle;
  }
  </script>
</body>

</html>