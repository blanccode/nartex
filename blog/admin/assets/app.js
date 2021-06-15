window.addEventListener("load", function () {

    const burger = document.querySelector('.admin-burger');
    const navLeft = document.querySelector('.admin-nav-l');
    const navUl = document.querySelector('.admin-ul');

    burger.addEventListener('click', () => {
        navLeft.classList.toggle('close-nav');
        navUl.classList.toggle('opacity-0');
    })

});