// FOR CHANGE IN ACTIVE PAGE COLOR
document.addEventListener('DOMContentLoaded', function() {
    const sidenavLinks = document.querySelectorAll('#nav a');

    // Add active class based on the current URL
    sidenavLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });

    // Change the active class on click
    sidenavLinks.forEach(link => {
        link.addEventListener('click', function() {
            sidenavLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

// FOR CHANGE IN ANIMATION
document.addEventListener('DOMContentLoaded', function() {
    const sidenavLinks = document.querySelectorAll('#nava a');
    const currentPage = window.location.pathname; // Get the current page path

    // Loop through all the links
    sidenavLinks.forEach(link => {
        const icon = link.querySelector('i');
        const linkHref = link.getAttribute('href');

        // If the link's href matches the current page, add the 'bx-tada' class
        if (currentPage === linkHref) {
            icon.classList.add('bx-tada');
        } else {
            icon.classList.remove('bx-tada');
        }
    });
});





// FOR EFFECT FOR HAMBUGGER
const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#closebtn");
const themeToggler = document.querySelector(".theme-toggler");

// OPEN SIDENAV
menuBtn.addEventListener("click", () => {
    sideMenu.style.display = "block";
})


// CLOSE SIDENAV
closeBtn.addEventListener("click", () => {
    sideMenu.style.display = "none";
})


// FOR THEME TOGGLER
themeToggler.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme-variables");

    themeToggler.querySelector("i:nth-child(1)").classList.toggle("active");
    themeToggler.querySelector("i:nth-child(2)").classList.toggle("active");
})