let slideIndex = 1;
showSlides(slideIndex);

function setSlideIndex(n) {
    slideIndex = n;
}

function plusSlidesMain(n, min, max) {
    if (slideIndex + n < min) {
        slideIndex = max;
        showSlides(slideIndex);
    } else if (slideIndex + n > max) {
        slideIndex = min;
        showSlides(min);
    } else {
        showSlides(slideIndex += n);
    }
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    console.log(n);
    var i;
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("slide-dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}