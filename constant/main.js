// toggle hamburger sett
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');
const closeIcon = document.getElementById("nav-close");
const navLink = document.querySelectorAll('nav__link');

navLink.forEach(link =>
    link.addEventListener("click", () => {
        navMenu.classList.add('hidden')
    })
)

closeIcon.addEventListener("click", () => {
    navMenu.classList.add('hidden')
})

hamburger.addEventListener("click", () => {
    navMenu.classList.remove('hidden')
})

// active link
// const activeLink = () => {
//     const sections = document.querySelectorAll("section");
//     const navLinks = document.querySelectorAll(".nav__link");

//     let current = 'home';

//     sections.forEach(sections => {
//         const sectionTop = section.offsetTop;

//         if(this.scrollY >= sectionTop - 60){
//             current = section.getAttribute('id')
//         }
//     });

//     navLinks.forEach((item) => {
//         item.classList.remove("text-primaryColor");
//         if(item.href.includes(current)){
//             item.classList.add("text-primaryColor")
//         }
//     });
// };

// window.addEventListener('scroll', activeLink);