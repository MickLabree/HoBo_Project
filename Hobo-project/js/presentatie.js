// slideshow
var foto = ["1.png", "2.png", "3.png", "4.png", "5.png"];

var test;
var indexSlide = 0;

window.onload = function () {
  test = document.getElementById("slideShow");

  setInterval(slideShow, 2000);
};

function slideShow() {
  test.style.backgroundImage = "url(img/" + foto[indexSlide] + ")";
  indexSlide++;
  if (indexSlide == foto.length) {
    indexSlide = 1;
  }
}
