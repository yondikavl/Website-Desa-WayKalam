document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector("[data-te-carousel-init]");
  const prevButton = document.querySelector('[data-te-slide="prev"]');
  const nextButton = document.querySelector('[data-te-slide="next"]');
  const indicators = document.querySelectorAll("[data-te-slide-to]");

  let currentSlide = 0;

  function showSlide(index) {
    const items = carousel.querySelectorAll("[data-te-carousel-item]");
    items[currentSlide].classList.remove("data-te-carousel-active");
    currentSlide = index;
    items[currentSlide].classList.add("data-te-carousel-active");
  }

  function prevSlide() {
    const newIndex = (currentSlide - 1 + indicators.length) % indicators.length;
    showSlide(newIndex);
  }

  function nextSlide() {
    const newIndex = (currentSlide + 1) % indicators.length;
    showSlide(newIndex);
  }

  prevButton.addEventListener("click", prevSlide);
  nextButton.addEventListener("click", nextSlide);

  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", function () {
      showSlide(index);
    });
  });
});
