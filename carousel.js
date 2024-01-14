document.addEventListener("DOMContentLoaded", function () {
  // Get the carousel element
  const carousel = document.getElementById("carouselExampleIndicators");

  // Get all carousel items
  const items = carousel.querySelectorAll("[data-te-carousel-item]");

  // Get all carousel indicators
  const indicators = carousel.querySelectorAll("[data-te-carousel-active]");

  // Initialize the carousel
  let currentIndex = 0;

  // Function to show the current slide
  const showSlide = (index) => {
    items.forEach((item, i) => {
      item.classList.toggle("hidden", i !== index);
    });

    indicators.forEach((indicator, i) => {
      indicator.setAttribute("aria-current", i === index ? "true" : "false");
    });
  };

  // Function to go to the next slide
  const nextSlide = () => {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide(currentIndex);
  };

  // Function to go to the previous slide
  const prevSlide = () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide(currentIndex);
  };

  // Add click event listeners to the next and previous buttons
  const nextButton = carousel.querySelector('[data-te-slide="next"]');
  const prevButton = carousel.querySelector('[data-te-slide="prev"]');

  nextButton.addEventListener("click", nextSlide);
  prevButton.addEventListener("click", prevSlide);

  // Initial display
  showSlide(currentIndex);
});
