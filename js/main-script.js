const header = document.querySelector("header");
const mobileNav = document.querySelector("nav#mobile-navigation");
const showOff = document.getElementById("show-off");
const openNavButton = document.getElementById("open-nav-button");
const closeNavButton = document.getElementById("close-nav-button");

var isMobileNavOpen = false;

const showOffOptions = {
    rootMargin: "-145px 0px 0px 0px"
};

const showOffObserver = new IntersectionObserver(function (entries, showOffObserver) {
    entries.forEach(entry => {

        if (!entry.isIntersecting) {
            header.classList.add("scrolled")

        } else if (entry.isIntersecting && !isMobileNavOpen) {

            header.classList.remove("scrolled")
        }

    })
}, showOffOptions);

showOffObserver.observe(showOff);

function openMobileNavigation() {
    isMobileNavOpen = true;

    header.classList.add("scrolled")
    mobileNav.classList.remove("collapsed")

    openNavButton.classList.toggle("hidden");
    closeNavButton.classList.toggle("hidden");
}

function closeMobileNavigation() {
    isMobileNavOpen = false;

    openNavButton.classList.toggle("hidden");
    closeNavButton.classList.toggle("hidden");

    mobileNav.classList.add("collapsed")

    if (showOffObserver.isIntersecting) {

        header.classList.add("scrolled")

    } else if (!showOffObserver.isIntersecting) {

        header.classList.remove("scrolled")
    }
}