/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he wishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLOBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/
var scores, roundScore, activePlayer;

scores = [0,0];
roundScore = 0;
activePlayer = 0;

document.querySelector('.dice').style.display = 'none';

document.getElementById('score-0').textContent = '0';
document.getElementById('score-1').textContent = '0';
document.getElementById('current-0').textContent = '0';
document.getElementById('current-1').textContent = '0';

document.querySelector('.btn-roll').addEventListener('click', function() {

    // get random number
    dice = Math.floor(Math.random() * 6) + 1;

    // display result
    var diceDOM = document.querySelector('.dice');
    diceDOM.style.display = 'block';
    diceDOM.src = 'images/pig_game/dice-' + dice + '.png';

    // update round score if roll != 1
    if (dice !== 1) {

        // add current roll to score
        roundScore += dice;

        // display updated roundScore
        document.querySelector('#current-' + activePlayer).textContent = roundScore;
    } else {
        // next player
        nextPlayer();
    }
});

// player clicks hold btn
document.querySelector('.btn-hold').addEventListener('click', function(){

    // add current score to GLOBAL scores array
    scores[activePlayer] += roundScore;

    // update the UI
    document.querySelector('#score-' + activePlayer).textContent = scores[activePlayer];

    // check if player won the game
    if (scores[activePlayer] >= 100) {
        document.querySelector('#name-' + activePlayer).textContent = 'WINNER!';
        document.querySelector('.dice').style.display = 'none';
        document.querySelector('.player-' + activePlayer + '-panel').classList.add('winner');
        document.querySelector('.player-' + activePlayer + '-panel').classList.remove('active');
    } else {
        // next player
        nextPlayer();
    }
});

// new game
document.querySelector('.btn-new').addEventListener('click', function(){

    // zero out scores[] and roundScore
    scores = [0,0];
    roundScore = 0;

    // display updated current scores
    document.querySelector('#current-0').textContent = '0';
    document.querySelector('#current-1').textContent = '0';

    // display updated roundScore
    document.querySelector('#score-0').textContent = roundScore;
    document.querySelector('#score-1').textContent = roundScore;

    // remove winner class; add active class to winner panel; change player text
    document.querySelector('.player-' + activePlayer + '-panel').classList.remove('winner');
    document.querySelector('.player-' + activePlayer + '-panel').classList.add('active');
    document.querySelector('#name-' + activePlayer).textContent = 'PLAYER ' + (activePlayer + 1);
});


function nextPlayer() {
    // next player
    activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;
    roundScore = 0;

    // change current score value displayed
    document.getElementById('current-0').textContent = 0;
    document.getElementById('current-1').textContent = 0;

    // toggle active class
    document.querySelector('.player-0-panel').classList.toggle('active');
    document.querySelector('.player-1-panel').classList.toggle('active');

    setTimeout(function(){
        document.querySelector('.dice').style.display = 'none';
    }, 3000);
}
