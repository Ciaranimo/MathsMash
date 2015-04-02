function setIcon(){

	var level=6;
	
	if(level==1){
		document.getElementById("icon").innerHTML="<img id='iconSize' src='images/animals/lvl1.png'/>";
	} 	
	else if(level==2){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl2.png'/>";
	}
	else if(level==3){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl3.png'/>";
	}
	else if(level==4){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl4.png'/>";
	}
	else if(level==5){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl5.png'/>";
	}
	else if(level==6){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl6.png'/>";
	}
	else if(level==7){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl7.png'/>";
	}	
	else if(level==8){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl8.png'/>";
	}
	else if(level==9){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl9.png'/>";
	}
	else if(level==10){
		document.getElementById("icon").innerHTML="<img src='images/animals/lvl10.png'/>";
	}
	document.getElementById('iconSize').height = "150";
	document.getElementById('iconSize').width = "150";
	
};