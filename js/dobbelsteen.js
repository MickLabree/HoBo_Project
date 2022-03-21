var dice; 
var dice2;
var rollDice;
var resultaat;

var arrayDice = ["dobbelsteen1.png", "dobbelsteen2.png", "dobbelsteen3.png", "dobbelsteen4.png", "dobbelsteen5.png", "dobbelsteen6.png"];

var arrayNummers = [];

var randNummer;
var randNummer2;


var diceInterval;
var intervalAmount = 10;
var count = 0;

window.onload = function() {
    dice = document.getElementById("dice");
    dice2 = document.getElementById("dice2");
    rollDice = document.getElementById("rollDice");
    resultaat = document.getElementById("resultaat");

    rollDice.onclick = function() {
        diceInterval = setInterval(showDice, 50);
        
        
    }
}

function showDice() {
    randNummer = Math.floor(Math.random() * 6);
    randNummer2 = Math.floor(Math.random() * 6);
    dice.style.backgroundImage = "url(img/" + arrayDice[randNummer] + ")";
    dice2.style.backgroundImage = "url(img/" + arrayDice[randNummer2] + ")";
    count++;
    if(count == intervalAmount) {
        count = 0;
        clearInterval(diceInterval);
        setNummers();
    }
    resultaat.innerHTML = randNummer + 1 + randNummer2 + 1;
}

function setNummers() {
    arrayNummers[4] = arrayNummers[3];
    arrayNummers[3] = arrayNummers[2];
    arrayNummers[2] = arrayNummers[1];
    arrayNummers[1] = arrayNummers[0];
    arrayNummers[0] = randNummer + 1;
}
