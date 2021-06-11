//////color-mode//////

const engBtn = document.querySelector('.eng-btn')
const polBtn = document.querySelector('.pol-btn')
const html = document.querySelector('html');


let myTheme = localStorage.getItem('theme')
console.log(myTheme)
if (myTheme != null && myTheme == 'light.css') {
    light()
} else {
    dark()
}


engBtn.addEventListener('click', dark)
polBtn.addEventListener('click', light)


function light() {
    changeTheme('light.css', "images/bubble-left-light.svg", "images/bubble-right-light.svg", "images/kartons-light.svg")
    html.classList.remove('eng');
    html.classList.add('pol');
}
function dark() {
    changeTheme("styles.css", "images/bubble-left.svg", "images/bubble-right.svg", "images/kartons.svg")
    html.classList.remove('pol');
    html.classList.add('eng');
}
function changeTheme(sheet, leftBubble, rightBubble, kartons) {
    localStorage.setItem('theme', sheet)
    document.getElementById('stylesheet').href = sheet
    document.getElementById('bubble-left').src = leftBubble
    document.getElementById('bubble-right').src = rightBubble
    document.getElementById('karton').src = kartons
}

window.addEventListener("load", function () {
    const burger = document.querySelector('.burger');
    const html = document.querySelector('html');
    const nav = document.querySelector('.nav-links');
    const modal = document.querySelector('.nav');
    const links = document.querySelectorAll('.nav-links li');
    const a = nav.querySelectorAll('a');

    burger.addEventListener('click', openCloseMenu);

    const engBtn = document.querySelector('.eng-btn')
    const polBtn = document.querySelector('.pol-btn')


    let myTheme = localStorage.getItem('theme')
    console.log(myTheme)
    if (myTheme != null && myTheme == 'light.css') {
        light()
    } else {
        dark()
    }

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
                if (html.className == 'eng open') {

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



   
    // let jq = document.querySelector('#jquery').src
    // jq = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js'
    // if (jq == 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js') {
    //     console.log(jq)
        $("a").on("click", function (e) {
            if (this.hash !== '') {
                e.preventDefault();

                const hash = this.hash;
                $('html,body').animate({
                    scrollTop: $(hash).offset().top
                }, 800);
            }
        });

    ///////////////////////////////

    // When the user scrolls the page, execute myFunction
    window.onscroll = function () { myFunction() };
    // Get the header
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
    let modalBg = document.querySelector('.modal-bg');
    let modalBtn = document.querySelector('.modal-btn');
    let modalClose = document.querySelector('.modal-close');
    let ratingBtn = document.querySelector('.rating-btn');
    let ratingForm = document.querySelector('.rating-form');

  
    modalBtn.addEventListener('click', () => {
        modalBg.classList.add('bg-active')
        modalBg.classList.remove('pointer')
    })
    modalClose.addEventListener('click', () => {
        modalBg.classList.remove('bg-active')
        modalBg.classList.add('pointer')
    })
    // ratingBtn.addEventListener('click', (e) => {
    //     // console.log('submitted btn')
    //     // modalBtn.classList.add('hide');
    //     // modalBtn.disabled = true;
    //     // return true;

    // })


    
});