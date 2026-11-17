document.querySelectorAll('.lab-slideshow').forEach(function(slideshow) {

    const images = slideshow.querySelectorAll('img');
    let current = 0;

    setInterval(function() {

        images[current].classList.remove('active');

        current = (current + 1) % images.length;

        images[current].classList.add('active');

    }, 5000);

});