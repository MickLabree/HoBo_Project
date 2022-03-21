function mathPow() {
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = Math.pow(num1, num2);
}

function multiplyBy() {
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = num1 * num2;
}

function machtReeks() {
    num1 = document.getElementById("totMacht2").value;
    var num2 = 2;
    document.getElementById("result2").innerHTML = Math.pow(num1, num2);
}
