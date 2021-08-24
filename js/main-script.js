const header = document.querySelector("header");
const showOff = document.getElementById("show-off");

const showOffOptions = {
    rootMargin: "-145px 0px 0px 0px"
};

const showOffObserver = new IntersectionObserver(function (entries, showOffObserver) {
    entries.forEach(entry => {

        if (!entry.isIntersecting) {
            header.classList.add("scrolled")
        } else {
            header.classList.remove("scrolled")
        }

    })
}, showOffOptions);

showOffObserver.observe(showOff);