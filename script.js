// Toggle Menu Icon
const menuIcon = document.getElementById('menu-icon');
const navLinks = document.querySelector('.nav-links');
const overlay = document.getElementById('overlay');




menuIcon.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  menuIcon.classList.toggle('active');
  overlay.classList.toggle('active');
});

// Close Menu When Clicking on Overlay
overlay.addEventListener('click', () => {
  navLinks.classList.remove('active');
  menuIcon.classList.remove('active');
  overlay.classList.remove('active');
});

// Dark Mode Toggle
const darkModeToggle = document.querySelector('.dark-mode-toggle');
const modeIcon = document.querySelector('.mode-icon');
const body = document.body;

darkModeToggle.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
  if (body.classList.contains('dark-mode')) {
    modeIcon.textContent = '☀'; // Sun icon for light mode
  } else {
    modeIcon.textContent = '🌙'; // Moon icon for dark mode
  }
});

//hERO SECTION
// Text Changing Animation
const changingText = document.getElementById('changing-text');
const texts = ["Web Developer", "UI/UX Designer", "Freelancer", "Tech Enthusiast"];
let index = 0;

function changeText() {
    changingText.querySelector('.text-change').textContent = texts[index];
    index = (index + 1) % texts.length;
  }
  
  setInterval(changeText, 3000); // Change text every 3 seconds


// Read More and Read Less Functionality
// Read More and Read Less Functionality
const readMore = document.getElementById('read-more');
const readLess = document.getElementById('read-less');
const moreText = document.getElementById('more-text');

readMore.addEventListener('click', () => {
  moreText.classList.add('visible');
  readMore.classList.add('hidden');
  readLess.classList.remove('hidden');
});

readLess.addEventListener('click', () => {
  moreText.classList.remove('visible');
  readMore.classList.remove('hidden');
  readLess.classList.add('hidden');
});