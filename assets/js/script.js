window.addEventListener("DOMContentLoaded", (event) => {
    const header = document.querySelector('header');
    const nav = document.querySelector('nav');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 5) {
            header.classList.add('scroll');
        } else if (window.scrollY > -5) {
            header.classList.remove('scroll');
        }

        if (window.scrollY > 15) {
            nav.classList.add('scroll');
        } else if (window.scrollY > -15) {
            nav.classList.remove('scroll');
        }
    });

});
