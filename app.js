window.addEventListener("load", function () {
    const burger = document.querySelector('.burger');

    burger.addEventListener('click', openCloseMenu);


    function openCloseMenu() {

        const html = document.querySelector('html');

        html.classList.toggle('open');

        // LINK ANIMATION
        links.forEach((link, index) => {
            linkAnimationCheck(link, index)
        })
    }

    const nav = document.querySelector('.nav-links');
    const modal = document.querySelector('.nav');
    const links = document.querySelectorAll('.nav-links li');
    const a = nav.querySelectorAll('a');



    function closeWithModal() {
        const html = document.querySelector('html');

        window.addEventListener('click', (e) => {
            if (e.target === modal) {

                html.classList.toggle('open')
                links.forEach((link, index) => {

                    linkAnimationCheck(link, index)

                })
            }
        })

    }
    closeWithModal()



    function linkAnimationCheck(link, index) {
        if (link.style.animation) {
            link.style.animation = ""
        } else {
            link.style.animation = `linkFade 0.5s ease forwards ${index / 7 + .3}s`
        }
    }


    a.forEach(link => {
        link.addEventListener('click', openCloseMenu)

    });
});
