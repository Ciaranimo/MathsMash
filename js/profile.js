/*
* profile.js *
* Rev 1 *
* 18/04/2015 *
*
* @author Eoin Sutton, Conor Prunty, David Byrne, Ciaran Byrne, Kevin Clarke *
*/ 

function setIcon() {
    if (levelNew == 1) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl1.png'/>";
    } else if (levelNew == 2) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl2.png'/>";
    } else if (levelNew == 3) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl3.png'/>";
    } else if (levelNew == 4) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl4.png'/>";
    } else if (levelNew == 5) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl5.png'/>";
    } else if (levelNew == 6) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl6.png'/>";
    } else if (levelNew == 7) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl7.png'/>";
    } else if (levelNew == 8) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl8.png'/>";
    } else if (levelNew == 9) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl9.png'/>";
    } else if (levelNew == 10) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl10.png'/>";
    }
};

function setIconLarge() {
    if (levelNew == 1) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl1.png'/>";
    } else if (levelNew == 2) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl2.png'/>";
    } else if (levelNew == 3) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl3.png'/>";
    } else if (levelNew == 4) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl4.png'/>";
    } else if (levelNew == 5) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl5.png'/>";
    } else if (levelNew == 6) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl6.png'/>";
    } else if (levelNew == 7) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl7.png'/>";
    } else if (levelNew == 8) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl8.png'/>";
    } else if (levelNew == 9) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl9.png'/>";
    } else if (levelNew == 10) {
        document.getElementById("icon").innerHTML =
            "<img id='iconSize' src='images/animals/lvl10.png'/>";
    }
    document.getElementById('iconSize').height = "150";
    document.getElementById('iconSize').width = "150";
};