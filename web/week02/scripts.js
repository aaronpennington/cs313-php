//Javascript file for Group Assignment
function buttonPress() {
  alert("Clicked!");
}

function changeColor() {
  let newColor = document.getElementById("colorText").value;
  document.getElementById("b1").style.backgroundColor = newColor;

}

function changeColor2() {
  let newColor = document.getElementById("colorText2").value;
  $("#b2").css("backgroundColor", newColor);
}

function fades(){
  $("#b3").fadeToggle();
  $("#b3").fadeToggle();
}
