window.addEventListener("load", function () {
    const burger = document.querySelector('.burger');
    const html = document.querySelector('html');
    const nav = document.querySelector('.nav-links');
    const modal = document.querySelector('#nav');
    const links = document.querySelectorAll('.nav-links li');
    const a = nav.querySelectorAll('a');

    burger.addEventListener('click', openCloseMenu);

    function openCloseMenu() {
        a.forEach(link => {
            link.addEventListener('click', openCloseMenu)

        });

        html.classList.toggle('open');

        modal.classList.toggle('pointer')

        closeWithModal()
        // LINK ANIMATION
        links.forEach((link, index) => {
            linkAnimationCheck(link, index)
        })
    }



    function closeWithModal() {

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                if (html.classList.contains("open") == true) {
                    
                    html.classList.toggle('open')
                    modal.classList.toggle('pointer')

                    links.forEach((link, index) => {
                        linkAnimationCheck(link, index)
                    })
                }

            }
        })

    }
    

    function linkAnimationCheck(link, index) {
        if (link.style.animation) {
            link.style.animation = ""
        } else {
            link.style.animation = `linkFade 0.5s ease forwards ${index / 7 + .3}s`
        }
    }


    

    ///////////////////////////////

    // When the user scrolls the page, execute myFunction
    window.onscroll = function () { myFunction() };


    let header = document.getElementById("nav");

    // Get the offset position of the navbar
    let sticky = header.offsetHeight


    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {

        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            html.classList.add('sticky');
        } else {
            header.classList.remove("sticky");
            html.classList.remove('sticky');
        }
    }

        ///////////////////////////////

    windowCloseBtn = document.querySelector('.card-menu-x-btn');
    sectionCloseBtn = document.querySelector('.section-menu-x-btn');
    sectionWindow = document.querySelector('.articles-section');
    mainblock = document.querySelector('.mainblock');
    console.log(windowCloseBtn)
    windowCloseBtn.addEventListener('click', () => {
        console.log('sdds')
        mainblock.classList.toggle('opacity');
    })
    sectionCloseBtn.addEventListener('click', () => {
        sectionWindow.classList.toggle('opacity');
    })
});