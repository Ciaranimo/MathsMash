/*
* higherlower.js *
* Rev 1 *
* 18/04/2015 *
*
* @author Eoin Sutton, Conor Prunty, David Byrne, Ciaran Byrne, Kevin Clarke *
*/ 

var randomNum, randomNum2, count = 0,
    correct = 0,
    timer, totalUpdatedScore = 0;

function begin() {
    setNum();
    show();
    countdownTimer(5000);
    hideBegin();
}

function setNum() {
    randomNum = parseInt(((Math.random() * 10) + 1));
    randomNum2 = parseInt(((Math.random() * 10) + 1));
    $('#firstnum').val(randomNum);
    $('#secondnum').val(randomNum2);
    $('#currentScore').val(correct);
    $('#totalPlays').val(count);
    if (randomNum == randomNum2) {
        setNum();
    }
}

function higher() {
    if (randomNum > randomNum2) {
        count++;
        correct = correct + 2;
        setNum();
    } else {
        count++;
        setNum();
    }
}

function lower() {
    if (randomNum < randomNum2) {
        correct = correct + 2;
        count++;
        setNum();
    } else {
        count++;
        setNum();
    }
}