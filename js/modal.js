const websitemodal = document.getElementById("website-modal");
const lindberghmodal = document.getElementById("lindbergh-modal");
const spottermodal = document.getElementById("spotter-modal");
const idsmodal = document.getElementById("ids-modal");
const weathermodal = document.getElementById("weather-modal");
const pokermodal = document.getElementById("poker-modal");
const tarmodal = document.getElementById("tar-modal");
const europemodal = document.getElementById("europe-modal");

const websitebtn = document.getElementById("website-button");
const lindberghbtn = document.getElementById("lindbergh-button");
const spotterbtn = document.getElementById("spotter-button");
const idsbtn = document.getElementById("ids-button");
const weatherbtn = document.getElementById("weather-button");
const pokerbtn = document.getElementById("poker-button");
const tarbtn = document.getElementById("tar-button");
const europebtn = document.getElementById("europe-button");


const websiteclose = document.getElementsByClassName("close")[0];
const lindberghclose = document.getElementsByClassName("close")[1];
const spotterclose = document.getElementsByClassName("close")[2];
const idsclose = document.getElementsByClassName("close")[3];
const weatherclose = document.getElementsByClassName("close")[4];
const pokerclose = document.getElementsByClassName("close")[5];
const tarclose = document.getElementsByClassName("close")[6];
const europeclose = document.getElementsByClassName("close")[7];

websitebtn.onclick = function() {
    websitemodal.style.display = "block";
    setSlideIndex(1);
    showSlides(1);
}

lindberghbtn.onclick = function() {
    lindberghmodal.style.display = "block";
    setSlideIndex(5);
    showSlides(5);
}

spotterbtn.onclick = function() {
    spottermodal.style.display = "block";
    setSlideIndex(10);
    showSlides(10);
}

idsbtn.onclick = function() {
    idsmodal.style.display = "block";
}

weatherbtn.onclick = function() {
    weathermodal.style.display = "block";
}

pokerbtn.onclick = function() {
    pokermodal.style.display = "block";
}

tarbtn.onclick = function() {
    tarmodal.style.display = "block";
    setSlideIndex(16);
    showSlides(16);
}

europebtn.onclick = function() {
    europemodal.style.display = "block";
    setSlideIndex(20);
    showSlides(20);
}

websiteclose.onclick = function() {
    websitemodal.style.display = "none";
}

spotterclose.onclick = function() {
    spottermodal.style.display = "none";
}

idsclose.onclick = function() {
    idsmodal.style.display = "none";
}

weatherclose.onclick = function() {
    weathermodal.style.display = "none";
}

pokerclose.onclick = function() {
    pokermodal.style.display = "none";
}

tarclose.onclick = function() {
    tarmodal.style.display = "none";
}

europeclose.onclick = function() {
    europemodal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == websitemodal || event.target == idsmodal || event.target == lindberghmodal || event.target == spottermodal || event.target == weathermodal || event.target == pokermodal || event.target == tarmodal || event.target == europemodal) {
        websitemodal.style.display = "none";
        lindberghmodal.style.display = "none";
        spottermodal.style.display = "none";
        idsmodal.style.display = "none";
        weathermodal.style.display = "none";
        tarmodal.style.display = "none";
        pokermodal.style.display = "none";
        europemodal.style.display = "none";
    }
}