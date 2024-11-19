function applyTheme() {
    const theme = localStorage.getItem('theme');
    const elements = ['.wrapper', '.abc', '.cl2', '.content']; 

    if (theme) {
        elements.forEach(selector => {
            const element = document.querySelector(selector);
            if (element) {
                element.classList.remove('light-green-theme', 'dark-green-theme');
                element.classList.add(theme === 'light' ? 'light-green-theme' : 'dark-green-theme');
            }
        });
    }
}
function setLightTheme() {
    const elements = ['.wrapper', '.abc', '.cl2', '.content'];
    elements.forEach(selector => {
        const element = document.querySelector(selector);
        if (element) {
            element.classList.remove('dark-green-theme');
            element.classList.add('light-green-theme');
        }
    });
    localStorage.setItem('theme', 'light');
}
function setDarkTheme() {
    const elements = ['.wrapper', '.abc', '.cl2', '.content'];
    elements.forEach(selector => {
        const element = document.querySelector(selector);
        if (element) {
            element.classList.remove('light-green-theme');
            element.classList.add('dark-green-theme');
        }
    });
    localStorage.setItem('theme', 'dark');
}

document.addEventListener('DOMContentLoaded', function () {
    const lightButton = document.getElementById('light');
    const darkButton = document.getElementById('dark');

    if (lightButton) {
        lightButton.addEventListener('click', setLightTheme);
    }

    if (darkButton) {
        darkButton.addEventListener('click', setDarkTheme);
    }
    applyTheme();
});
