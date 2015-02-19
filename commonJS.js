<script type="text/javascript">

	function countdownTimer(number) {
        
        if (number == 0) {
          timerAlert();
        }
        else {
          $("#time").html("<h1> Timer: " + number / 1000 + "</h1>");
                          timer = setTimeout(function() {
            countdownTimer(number - 1000)
          }
          , 1000)
            
        }
      }
	  
	  function timerAlert() {
        
        $('#firstnum').val("");
        $('#secondnum').val("");
        $('#currentScore').val("");
        $('#totalPlays').val("");
        alert("Time up!\n You got "+correct+" out of "+count);
        correct=0;
        count=0;
        hide();
        showBegin();
        
        
      }
	       
</script>