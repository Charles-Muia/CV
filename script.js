
    const header = document.querySelector ("header");
    window.addEventListener("scroll", function () {
        header.classList.toggle("sticky",window.scrollY > 0);
    });

    let menu = document.querySelector('#menu-icon');
    let navlinks = document.querySelector('.nav-links');

    menu.onclick = () => {
        menu.classList.toggle('bx-menu');
        navlinks.classList.toggle('active');
    };

    window.onscroll = () => {
        menu.classList.remove('bx-menu');
        navlinks.classList.remove('active');
    };