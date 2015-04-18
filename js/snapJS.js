/*
* snap.js *
* Rev 1 *
* 18/04/2015 *
*
* @author Eoin Sutton, Conor Prunty, David Byrne, Ciaran Byrne, Kevin Clarke *
*/     
    
      var ran1, ran2, count = 0,
          correct = 0,
          myTime, timer;

      function begin() {
          generateNums();
          hideBegin();
          setNum();
          countdownTimer(10000);
          myTime = setInterval(setBackgroundTimer, 550);
      }

      function setBackgroundTimer() {
          generateNums();
          randLeft();
          randRight();
      }

      function setNum() {
          show();
          hideBegin();
          randLeft();
          randRight();
          $('#currentScore').val(correct);
          $('#totalPlays').val(count);
      }

      function randLeft() {
          document.getElementById("leftBox").innerHTML = ran1;
      }

      function randRight() {
          document.getElementById("rightBox").innerHTML = ran2;
      }

      function checkNums() {
          if (ran1 == ran2) {
              correct++;
              count++;
          } else {
              correct--;
              count++;
              correct--;
          }
      }

      function snapFunction() {
          checkNums();
          generateNums();
          setNum();
      }

      function generateNums() {
          ran1 = parseInt(((Math.random() * 10) + 1));
          ran2 = parseInt(((Math.random() * 10) + 1));
      }