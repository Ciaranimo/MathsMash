function countdownTimer(number) {

    if (number == 0) {
        timerAlert();
    } else {
        $("#time").html("<h1> Timer: " + number / 1000 + "</h1>");
        timer = setTimeout(function() {
            countdownTimer(number - 1000)
        }, 1000)

    }
}

function timerAlert() {
	
    $('#firstnum').val("");
    $('#secondnum').val("");
    $('#currentScore').val("");
    $('#totalPlays').val("");
    alert("Time up!\n You got " + correct + " out of " + count);
	totalUpdatedScore = totalUpdatedScore + correct;
	updatedTotalScore();
	ajaxSubmit();
    correct = 0;
    count = 0;
    hide();
    showBegin();
	stopTimer();


}

function ajaxSubmit() {
	// Store data to be submitted into variables
	var score = totalUpdatedScore;
	var userID = "mrprunty";
	// Fetch data to be posted
	allData = "playerName="+userID+"&score="+score;
	
	// Setup the ajax request
	$.ajax({
		type: "POST",
		url: "./savescore.php",
		data: allData,
		fail: function() {
			alert( "error" );
		}
	});
	
	// return false so the page does not actually change
	return false;		
};

function updatedTotalScore(){
	$('#finalScore').val(totalUpdatedScore);
	
}


function stopTimer() {
    clearTimeout(timer);
    clearInterval(myTime);
}

function hide() {

    $("#but1").hide();
    $("#but2").hide();
    $("#but3").hide();
    $("#but4").hide();
    $("#snap").hide();
}

function show() {

    $("#but1").show();
    $("#but2").show();
    $("#but3").show();
    $("#but4").show();
    $("#snap").show();

}

function hideBegin() {

    $("#butBegin").hide();
}

function showBegin() {

    $("#butBegin").show();
}