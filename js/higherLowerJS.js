var randomNum, randomNum2, count = 0,
    correct = 0,
    timer;

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
        correct++;
        setNum();
    } else {
        count++;
        setNum();
    }


}

function lower() {

    if (randomNum < randomNum2) {
        correct++;
        count++;
        setNum();
    } else {
        count++;
        setNum();
    }

}