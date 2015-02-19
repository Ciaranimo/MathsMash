<script type="text/javascript">
      var randomNum, randomNum2, count = 0,
          correct = 0,
          timer;
      
      
      
      
      
      function stopTimer() {
        clearTimeout(timer);
      }
      
      function begin() {
        setNum();
        show();
        countdownTimer(30000);
        hideBegin();
      }
      
      function hide() {
        
        $("#but1").hide();
        $("#but2").hide();
        
      }
      
      function show() {
        
        $("#but1").show();
        $("#but2").show();
        
      }
      
      function hideBegin() {
        
        $("#butBegin").hide();
      }
      
      function showBegin() {
        
        $("#butBegin").show();
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
        }
        else {
          count++;
          setNum();
        }
        
        
      }
      
      function lower() {
        
        if (randomNum < randomNum2) {
          correct++;
          count++;
          setNum();
        }
        else {
          count++;
          setNum();
        }
        
      }
      
    </script>