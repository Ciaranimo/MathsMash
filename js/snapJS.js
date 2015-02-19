      var ran1, ran2, score=0, myTime, timer;
      
      function begin(){
		generateNums();
          hideBegin();
          setNum();
          countdownTimer(30000);
          myTime = setInterval(setBackgroundTimer, 550);
          
		}
                          
                          function setBackgroundTimer(){
                            generateNums();
                            randLeft();
                            randRight();
                          }
                          

                          
                          
                          function setNum(){
                            
                            show();
                            hideBegin();
                            randLeft();
                            randRight();
                            $('#currentScore').val(score);
                            
                          }
                          
                          function randLeft(){
                            
                            document.getElementById("leftBox").innerHTML = ran1;
                          }
                          
                          function randRight(){
                            
                            document.getElementById("rightBox").innerHTML = ran2;
                          }

                          
                          function checkNums(){
                            
                            if(ran1==ran2){
                              
                              score=score+10;
                              
                            }
                            
                            else{
                              score=score-5;
                            }
                          }
                          
                          function snapFunction(){
                            
                            checkNums();
                            generateNums();
                            setNum();
                            
                          }
                          
                          function generateNums(){
                            
                            ran1 = parseInt(((Math.random() * 10) + 1));
                            ran2 = parseInt(((Math.random() * 10) + 1));
                          }
                          
                          