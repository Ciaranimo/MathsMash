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
	  
	       
</script>