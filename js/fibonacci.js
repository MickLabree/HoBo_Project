let number;
let n1 = 0,
  n2 = 1,
  nextTerm = 0;
window.onload = function () {
  var input = document.getElementById("input");
  var button = document.getElementById("fibonacciButton");
  var output = document.getElementById("output");

  console.log("Fibonacci Series:");
  console.log(n1);
  console.log(n2);

  button.onclick = function () {
    number = input.value;
    console.log(number);
    while (nextTerm <= number) {
      console.log(nextTerm);
      output.innerHTML += nextTerm + "<br class='ligma'>";
      n1 = n2;
      n2 = nextTerm;
      nextTerm = n1 + n2;
    }
  };
};
