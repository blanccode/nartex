window.addEventListener("load", function () {

    const burger = document.querySelector('.admin-burger');
    const navLeft = document.querySelector('.admin-nav-l');
    const navLinks = document.querySelectorAll('.admin-ul a');
    // console.log(navUl);
    burger.addEventListener('click', () => {
        navLeft.classList.toggle('close-nav');

        navLeft.classList.toggle('opacity-1');

        // navLinks.forEach(link => {
        //     link.classList.toggle('opacity-1');

        // });
    })

});