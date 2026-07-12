const slides = [
  {
    image: "assets/images/runtime-img.png",
    title: "Runtime terror",
    subtitle: "Runtime terror",
  },
  {
    image: "assets/images/wackarabbit-img.jpg",
    title: "Wack-a-rabbit",
    subtitle: "Wack-a-rabbit",
  },
  {
    image: "assets/images/Text-tv-img.jpg",
    title: "TextTV Online",
    subtitle: "TextTV Online",
  },
  {
    image: "assets/images/LIA-connect.jpg",
    title: "LIA Connect",
    subtitle: "LIA Connect",
  },
  {
    image: "assets/images/cloudops-img.jpg",
    title: "CloudOps",
    subtitle: "CloudOps",
  },
  {
    image: "assets/images/portfolio-img.jpg",
    title: "Student portfolio",
    subtitle: "Student portfolio",
  },
];

class HeroCarousel {
  constructor(containerSelector, slidesData) {
    this.container = document.querySelector(containerSelector);
    this.slides = slidesData;
    this.currentSlide = 0;
    this.autoplayInterval = null;

    this.init();
  }

  init() {
    this.render();
    this.startAutoplay();
  }

  render() {
    const slidesHTML = this.slides
      .map(
        (slide, index) => `
        <div class="slide ${index === 0 ? "active" : ""}" data-index="${index}">
          <img src="${slide.image}" alt="${slide.title}" class="slide-image">
          <div class="slide-content">
            <div class="content-wrapper">
              <h1 class="slide-title">${slide.title}</h1>
            </div>
          </div>
        </div>
      `,
      )
      .join("");

    this.container.innerHTML = slidesHTML;
  }

  goToSlide(index) {
    const currentSlideEl = this.container.querySelector(
      `.slide[data-index="${this.currentSlide}"]`,
    );
    const currentDot = this.container.querySelector(
      `.dot[data-index="${this.currentSlide}"]`,
    );

    currentSlideEl.classList.remove("active");
    if (currentDot) currentDot.classList.remove("active"); // ← null-check

    this.currentSlide = index;

    const newSlideEl = this.container.querySelector(
      `.slide[data-index="${this.currentSlide}"]`,
    );
    const newDot = this.container.querySelector(
      `.dot[data-index="${this.currentSlide}"]`,
    );

    newSlideEl.classList.add("active");
    if (newDot) newDot.classList.add("active"); // ← null-check

    this.resetAutoplay();
  }

  nextSlide() {
    const nextIndex = (this.currentSlide + 1) % this.slides.length;
    this.goToSlide(nextIndex);
  }

  prevSlide() {
    const prevIndex =
      (this.currentSlide - 1 + this.slides.length) % this.slides.length;
    this.goToSlide(prevIndex);
  }

  startAutoplay() {
    this.autoplayInterval = setInterval(() => {
      this.nextSlide();
    }, 4000);
  }

  resetAutoplay() {
    clearInterval(this.autoplayInterval);
    this.startAutoplay();
  }
}

// Initiate carousel when page has been loaded
document.addEventListener("DOMContentLoaded", () => {
  new HeroCarousel("#carousel", slides);
});
