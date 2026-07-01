const applyThemeToggle = () => {
    const isDark = document.documentElement.classList.contains('dark');

    document.querySelectorAll('[data-theme-toggle]').forEach((toggle) => {
        const thumb = toggle.querySelector('[data-theme-thumb]');
        const sun = toggle.querySelector('[data-theme-sun]');
        const moon = toggle.querySelector('[data-theme-moon]');

        thumb?.classList.toggle('translate-x-7', isDark);
        sun?.classList.toggle('hidden', isDark);
        moon?.classList.toggle('hidden', !isDark);
    });
};

document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
    button.addEventListener('click', () => {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.theme = isDark ? 'dark' : 'light';
        applyThemeToggle();
    });
});

applyThemeToggle();

document.querySelectorAll('[data-password-toggle]').forEach((button) => {
    button.addEventListener('click', () => {
        const input = document.getElementById(button.dataset.passwordToggle);
        const eye = button.querySelector('[data-password-eye]');
        const eyeOff = button.querySelector('[data-password-eye-off]');

        if (!input) {
            return;
        }

        const shouldShow = input.type === 'password';

        input.type = shouldShow ? 'text' : 'password';
        button.setAttribute('aria-label', shouldShow ? 'Hide password' : 'Show password');
        eye?.classList.toggle('hidden', shouldShow);
        eyeOff?.classList.toggle('hidden', !shouldShow);
    });
});
