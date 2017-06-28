<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<title>Number Guessing Game</title>
	<style>
	</style>

<body>
	<h1>Number Guessing Game</h1>
	<p>We have selected a random number between 1 and 100. </p>
	
	<div class="form">
		Enter a guess:<input type="text" id="guessField" class="guessField">
		<input type="submit" value="Submit Guess" class="guessSubmit">
	</div>

	<div class="resultParas">
		<p class="guesses"></p>
		<p class="lastResult"></p>
		<p class="lowOrHi"></p>
	</div>
<script>
var randomNumber = Math.floor(Math.random() * 100) +1;

var guesses = document.querySelector('.guesses');
var lastResult = document.querySelector('.lastResult');

var lowOrHi = document.querySelector('.lowOrHi');
var guessSubmit = document.querySelector('.guessSubmit');
var guessField = document.querySelector('.guessField');

var guessCount = 1;
var resetButton;

function checkGuess(){
	var userGuess = Number(guessField.value);
	if(guessCount === 1) {
		guesses.textContent='Previous guesses:';
	}
	guesses.textContent += userGuess + ' ';

	if(userGuess === randomNumber) {
	lastResult.textContent = 'Congrats! You got it right';
	lastResult.style.backgroundColor = 'green';
	lowOrHi.textContent = '';
	setGameOver();
	} else if (guessCount === 10){
	lastResult.textContent = 'Game Over!';
	setGameOver();
	} else {
		lastResult.textContent = 'Wrong';
		lastResult.style.backgroundColor = 'red';
		if (userGuess < randomNumber ) {
		lowOrHi.textContent = 'Last guess was too low!';
		} else if (userGuess > randomNumber){
		lowOrHi.textContent = 'Last guess was too high!';
		}
	}
	
	guessCount++;
	guessField.value = '';
	guessField.focus();
}

guessSubmit.addEventListener('click', checkGuess);

function setGameOver(){
	guessField.disabled = true;
	guessSubmit.disabled = true;
	resetButton = document.createElement('button');
	resetButton.textContent = 'Start new game';
	document.body.appendChild(resetButton);
	resetButton.addEventListener('click', resetGame);
}

function resetGame(){
	guessCount = 1;

 	var resetParas = document.querySelectorAll('.resultParas p');
	for (var i = 0 ; i < resetParas.length ; i++){
		resetParas[i].textContent = '';
	}
	

	resetButton.parentNode.removeChild(resetButton);
	guessField.disabled = false;
	guessSubmit.disabled = false;
	guessField. value = '';
	guessField.focus();

	lastResult.style.backgroundColor = 'white';
	randomNumber = Math.floor(Math.random()* 100) +1;
}

	


	

</script>

</body>
</html>	
