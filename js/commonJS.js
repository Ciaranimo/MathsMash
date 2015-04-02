//global variable
var level = 0;




function countdownTimer(number) {

    if (number == 0) {
        timerAlert();
    } else {
        $("#time").html("<h1>" + number / 1000 + "</h1>");
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
	totalUpdatedScore = correct;
	updatedTotalScore();
		setLevel();
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
	//var user = "<?php echo $_SESSION['user']; ?>";
	var userID = actualUser;
	// Fetch data to be posted
	allData = "playerName="+userID+"&score="+score+"&level="+level;
	
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

function setLevel(){

	if(myscore<10){
		level=1;
	}
	else if(myscore>=10&&myscore<20){
		level=2;
	}
	else if(myscore>=20&&myscore<40){
		level=3;
	}
	else if(myscore>=40&&myscore<80){
		level=4;
	}
	else if(myscore>=80&&myscore<160){
		level=5;
	}
	else if(myscore>=160&&myscore<320){
		level=6;
	}
	else if(myscore>=320&&myscore<640){
		level=7;
	}
	else if(myscore>=640&&myscore<1280){
		level=8;
	}
	else if(myscore>=1280&&myscore<2560){
		level=9;
	}
	else if (myscore>=2560){
		level=10;
	}
	alert("level = " + level);

};






function ajaxGet() {
	// Store data to be submitted into variables
	//var score = totalUpdatedScore;
	//var user = "<?php echo $_SESSION['user']; ?>";
	var userID = actualUser;
	// Fetch data to be posted
	allData = "playerName="+userID;
	
	// Setup the ajax request
	$.ajax({
		type: "GET",
		url: "./getScore.php",
		data: allData,
		//dataType:'text';
		success: function(msg) {
			alert( "Success! - Score = " +msg );
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