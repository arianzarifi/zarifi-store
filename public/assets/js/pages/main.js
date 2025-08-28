const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
  });
  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === index);
  });
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
}

// اتوماتیک هر ۵ ثانیه
let autoSlide = setInterval(nextSlide, 5000);

// دکمه‌ها
nextBtn.addEventListener('click', () => {
  nextSlide();
  resetInterval();
});
prevBtn.addEventListener('click', () => {
  prevSlide();
  resetInterval();
});

// نقاط پایین
dots.forEach(dot => {
  dot.addEventListener('click', () => {
    currentIndex = parseInt(dot.dataset.index);
    showSlide(currentIndex);
    resetInterval();
  });
});

function resetInterval() {
  clearInterval(autoSlide);
  autoSlide = setInterval(nextSlide, 5000);
}
