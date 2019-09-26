<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Week 02</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<!--https://www.w3schools.com/bootstrap/bootstrap_grid_system.asp-->
<body>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-4"><button type="button" name="1" id="b1" onclick="buttonPress()">Click Me</button> </div>
      <div class="col-sm-4"><button type="button" name="2" id="b2" onclick="buttonPress()">Click Me</button> </div>
      <div class="col-sm-4"><button type="button" name="3" id="b3" onclick="buttonPress()">Click Me</button> </div>
   </div>
</div>
Change color: <input type="text" id="colorText" name="ChangeColor" value="">
<button type="button" name="changeColorBtn" id="changeColorBtn" onclick="changeColor()">Change color</button><br>

Change color with jQuery: <input type="text" id="colorText2" name="ChangeColor2" value="">
<button type="button" name="changeColorBtn" id="changeColorBtn" onclick="changeColor2()">Change color</button><br>

Again: <button type="button" name="fade" id="fadeit" onclick="fades()">fade</button><br>


<script src="scripts.js"></script>
</body>

</html>
