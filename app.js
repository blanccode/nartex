
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const modal = document.querySelector('.nav');
const links = document.querySelectorAll('.nav-links li');
const a = nav.querySelectorAll('a');
const html = document.querySelector('html');

const darkMenuCloser = document.querySelector('.menu-closer');


burger.addEventListener('click', openCloseMenu);



function openCloseMenu() {

    const html = document.querySelector('html');

    html.classList.toggle('open');

    // LINK ANIMATION
    links.forEach((link, index) => {
        linkAnimationCheck(link, index)
    })
}

function closeWithModal() {
    const html = document.querySelector('html');

    window.addEventListener('click', (e) => {
        console.log(e.target)
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
    link.addEventListener('click', openCloseMenu )
    
});

$("a").on("click", function (e) {
    if (this.hash !== '') {
        e.preventDefault();

        const hash = this.hash;
        $('html,body').animate({
            scrollTop: $(hash).offset().top
        }, 800);
    }
});