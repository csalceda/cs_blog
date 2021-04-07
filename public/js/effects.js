
$(document).ready(function () {

  var i = 0;
  var txt = 'hello! i am Cha.';
  setInterval(function () {
    if (i < txt.length) {
      document.getElementById("greet").innerHTML += txt.charAt(i);
      i++;
    }
  }, 500);


});