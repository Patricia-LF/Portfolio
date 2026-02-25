// script.js
const themeToggle = document.getElementById('themeToggle');
const sunIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>`;

const moonIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" /></svg>`;

// Kolla om användaren hade ett sparat val
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'light') {
    document.body.classList.add('light');
    themeToggle.innerHTML = moonIcon;
} else {
    themeToggle.innerHTML = sunIcon; // dark mode = show sun
}

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('light');
    const isLight = document.body.classList.contains('light');
    themeToggle.innerHTML = isLight ? moonIcon : sunIcon;
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
});

document.querySelectorAll('.project-card img').forEach(img => {
    img.addEventListener('click', () => {
        // Exempel: förstora bilden i en lightbox
        const modal = document.createElement('div');
        modal.classList.add('modal');
        modal.innerHTML = `<img src="${img.src}" alt="${img.alt}"><span class="close">&times;</span>`;
        document.body.appendChild(modal);

        modal.querySelector('.close').addEventListener('click', () => {
            document.body.removeChild(modal);
        });
    });
});

const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('header nav');

hamburger.addEventListener('click', () => {
    nav.classList.toggle('active');
});

document.querySelectorAll('header nav a').forEach(link => {
    link.addEventListener('click', () => {
        nav.classList.remove('active');
    });
});

const logos = document.querySelectorAll('.logo-spinner img');
let current = 0;

function nextLogo() {
    logos[current].classList.remove('active');
    current = (current + 1) % logos.length;
    logos[current].classList.add('active');
}

// Visa första loggan direkt
logos[0].classList.add('active');

// Change every 2 sekonds
setInterval(nextLogo, 2000);