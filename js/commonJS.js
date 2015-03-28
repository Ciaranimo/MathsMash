function countdownTimer(number) {

    if (number == 0) {
        timerAlert();
    } else {
        $("#time").html("<h1> " + number / 1000 + "</h1>");
        timer = setTimeout(function() {
            countdownTimer(number - 1000)
        }, 1000)

    }
}

function timerAlert() {

	/*alert("Time up!\n You got " + correct + " out of " + count); */ //have edited this out for now
	$('#firstnum').val("");
    $('#secondnum').val("");
    $('#currentScore').val("");
    $('#totalPlays').val("");
	hide();
    showBegin();
	stopTimer();
	totalUpdatedScore = correct;
	updatedTotalScore();
	ajaxSubmit();
	correct = 0;
    count = 0;
	
    
    
}

function resetStats() {

    var rs;
    if (confirm("Are you sure?") == true) {
        rs = UPDATE score
             SET TO 0
             WHERE user = [username};
    }
}

function ajaxSubmit() {
	// Store data to be submitted into variables
	var score = totalUpdatedScore;
	//var user = "<?php echo $_SESSION['user']; ?>";
	var userID = actualUser;
	// Fetch data to be posted
	var allData = "playerName="+userID+"&score="+score;
	
	// Setup the ajax request
	$.ajax({
		type: "POST",
		url: "./saveScore.php",
		data: allData,
		fail: function() {
			alert( "error" );
		}
	});
	
	// return false so the page does not actually change
	return false;		
};

function levelUp(){

	score = getScoreFromDatabase;
 
	if(score<10){
		level=1;
	}
	else if(level>=10&&<20){
		level=2;
	}
	else if(level>=20&&<40){
		level=3;
	}
	else if(level>=40&&<80){
		level=4;
	}
	else if(level>=80&&<160){
		level=5;
	}
	else if(level>=160&&<320){
		level=6;
	}
	else if(level>=320&&<640){
		level=7;
	}
	else if(level>=640&&<1280){
		level=8;
	}
	else if(level>=1280&&<2560){
		level=9;
	}
	else if(level>=2560){
		level=10;
	}
	
}

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
	$("#time").hide();
}

function show() {

    $("#but1").show();
    $("#but2").show();
    $("#but3").show();
    $("#but4").show();
    $("#snap").show();
	$("#time").show();

}

function hideBegin() {

    $("#butBegin").hide();
}

function showBegin() {

    $("#butBegin").show();
}