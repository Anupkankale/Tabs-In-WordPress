let currentSlide = 0;
const images = document.querySelectorAll('.carousel-images img');
const totalSlides = images.length;

function moveSlide(direction) {
  currentSlide += direction;
  if (currentSlide < 0) {
    currentSlide = totalSlides - 1;
  } else if (currentSlide >= totalSlides) {
    currentSlide = 0;
  }
  const offset = -currentSlide * 100; // 100% width slide
  document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}
