var arr3;
        var ran1, ran2, addit, add2, subtr, sub2, multip, mul2, int2, int3, int4, ranAns1, ranAns2, ranAns3, correctAns, count=0, correct=0, timer;

        
		function begin(){
		
		show();
		hideBegin();
		setNum();
		countdownTimer(5000);
		
		
		}
		
		function setNum() {
			
            //var ran1, ran2, add, add2, sub, sub2, mul, mul2, int2, int3, int4, ranAns1, ranAns2, ranAns3, correctAns;
            ran1 = parseInt(((Math.random() * 10) + 1));
            ran2 = parseInt(((Math.random() * 5) + 1));
            ranAns1 = parseInt(((Math.random() * 20) + 1));
            ranAns2 = parseInt(((Math.random() * 20) + 1));
            ranAns3 = parseInt(((Math.random() * 20) + 1));

            $('#fNum').val(ran1);
			$('#currentScore').val(correct);
			$('#totalPlays').val(count);
			

            addit = ran1 + ran2;
            add2 = addit + ran2;
            subtr = ran1 - ran2;
            sub2 = subtr - ran2;
            multip = ran1 * ran2;
            mul2 = multip * ran2;

            var arr = [addit, subtr, multip];
            var arr2 = [add2, sub2, mul2];

            int2 = arr[parseInt(Math.random() * arr.length)];
            $('#sNum').val(int2);
            //alert(arr[0]);

            if (int2 == parseInt((arr[0]))) {
                int3 = int2 + ran2;
                $('#tNum').val(int3);
            } else if (int2 == parseInt((arr[1]))) {
                int3 = int2 - ran2;
                $('#tNum').val(int3);
            } else if (int2 == parseInt((arr[2]))) {
                int3 = int2 * ran2;
                $('#tNum').val(int3);
            }

            if (int3 == parseInt(arr2[0])) {
                int4 = int3 + ran2;
            } else if (int3 == parseInt(arr2[1])) {
                int4 = int3 - ran2;
            } else if (int3 == parseInt(arr2[2])) {
                int4 = int3 * ran2;
            }

            arr3 = [int4, ranAns1, ranAns2, ranAns3];
            arr3.sort(function() {
                return 0.5 - Math.random()
            });
            $('#but1').html(arr3[0]);
            $('#but2').html(arr3[1]);
            $('#but3').html(arr3[2]);
            $('#but4').html(arr3[3]);


        }
		
	

        function one() {
            if (arr3[0] == int4) {
                correct++;
				count++;
				setNum();
            } else {
				count++;
				setNum();
            }
        }

        function two() {
            if (arr3[1] == int4) {
                correct++;
				count++;
				setNum();
            } else {
				count++;
				setNum();
            }
        }

        function three() {
            if (arr3[2] == int4) {
                correct++;
				count++;
				setNum();
            } else {
				count++;
				setNum();
            }
        }

        function four() {
            if (arr3[3] == int4) {
                correct++;
				count++;
				setNum();
            } else {
				count++;
				setNum();
            }
        }