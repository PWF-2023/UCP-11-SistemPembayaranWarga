import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('isDarkMode') === 'dark' || (!('isDarkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('isDarkMode')) {
        if (localStorage.getItem('isDarkMode') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('isDarkMode', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('isDarkMode', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('isDarkMode', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('isDarkMode', 'dark');
        }
    }

});

Alpine.start();
