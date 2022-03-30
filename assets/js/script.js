window.addEventListener("DOMContentLoaded", (event) => {
    const header = document.querySelector('header');
    const nav = document.querySelector('nav');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 5) {
            header.classList.add('scroll');
            document.querySelector('.a-propos').style.marginTop = "25vh";
        } else if (window.scrollY > -5) {
            header.classList.remove('scroll');
            document.querySelector('.a-propos').style.marginTop = "0vh";
        }

        if (window.scrollY > 15) {
            nav.classList.add('scroll');
        } else if (window.scrollY > -15) {
            nav.classList.remove('scroll');

        }
    });

});
