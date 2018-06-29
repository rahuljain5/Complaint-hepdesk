var nrImg = 4; //the number of img , I only have 3 
var IntSeconds = 4; //the seconds between the imgs

function Load() {
    nrShown = 0; //the img visible
    Vect = new Array(nrImg + 10);
    Vect[0] = document.getElementById("Img1");
    Vect[0].style.visibility = "visible";
    for (var i = 1; i < nrImg; i++) {
        Vect[i] = document.getElementById("Img" + (i + 1));
    }
    mytime = setInterval(Timer, IntSeconds * 1000);
}

function Timer() {
    nrShown++;
    if (nrShown == nrImg)
        nrShown = 0;
    Effect();
}
//next img
function next() {
    nrShown++;
    if (nrShown == nrImg)
        nrShown = 0;
    Effect();
    clearInterval(mytime);
    mytime = setInterval(Timer, IntSeconds * 1000);
}

function prev() {
    nrShown--;
    if (nrShown == -1)
        nrShown = nrImg - 1;
    Effect();
    clearInterval(mytime);
    mytime = setInterval(Timer, IntSeconds * 1000);
}
//here changes the img + effect
function Effect() {
    for (var i = 0; i < nrImg; i++) {
        Vect[i].style.opacity = "0"; //to add the fade effect
        Vect[i].style.visibility = "hidden";
    }
    Vect[nrShown].style.opacity = "1";
    Vect[nrShown].style.visibility = "visible";
}

function myMap() {
    var mapOptions = {
      center: new google.maps.LatLng(12.901814, 77.631244),
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.HYBRID
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  }
