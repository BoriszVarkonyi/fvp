const header = document.querySelector("header");
const mobileNav = document.querySelector("nav#mobile-navigation");
const showOff = document.getElementById("show-off");
const openNavButton = document.getElementById("open-nav-button");
const closeNavButton = document.getElementById("close-nav-button");

var isMobileNavOpen = false;
var isIntersecting;

const showOffOptions = {
    rootMargin: "-145px 0px 0px 0px"
};

const showOffObserver = new IntersectionObserver(function (entries, showOffObserver) {
    entries.forEach(entry => {

        if (!entry.isIntersecting) {

            header.classList.add("scrolled");

            isIntersecting = false;

        } else if (entry.isIntersecting && !isMobileNavOpen) {

            header.classList.remove("scrolled");

            isIntersecting = true;
        }

    })
}, showOffOptions);

showOffObserver.observe(showOff);

function openMobileNavigation() {
    isMobileNavOpen = true;

    header.classList.add("scrolled");
    mobileNav.classList.remove("collapsed");

    openNavButton.classList.toggle("hidden");
    closeNavButton.classList.toggle("hidden");
}

function closeMobileNavigation() {
    isMobileNavOpen = false;

    openNavButton.classList.toggle("hidden");
    closeNavButton.classList.toggle("hidden");

    mobileNav.classList.add("collapsed");

    if (!isIntersecting) {

        header.classList.add("scrolled");

    } else {

        header.classList.remove("scrolled");
    }
}

//Gets window size
window.addEventListener("resize", () => {
    windowSize();
});

var visibleColumns = 0;
var vw;

function windowSize() {

    vw = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (vw <= 440) {

        visibleColumns = 1;
        console.log(1)

    } else if (440 < vw && vw < 600) {

        visibleColumns = 2;
        console.log(2)

    } else if (600 <= vw && vw < 992) {

        visibleColumns = 3;
        console.log(3)

    } else if (vw > 992) {

        visibleColumns = 4;
        console.log(4)

    }

}

windowSize();

const categoryGrids = document.querySelectorAll("h2 + .content.grid");

let categoryItemsAll = [];
let categoryItemsShown = [];
let categoryItemsHidden = [];
let categoryShownRows = [];


for (let i = 0; i < categoryGrids.length; i++) {

    categoryItemsAll.push(categoryGrids[i].childElementCount);
    categoryItemsShown.push(visibleColumns);

    categoryItemsHidden.push(categoryItemsAll[i] - categoryItemsShown[i]);

    if (categoryItemsHidden[i] > 0) {
        categoryGrids[i].nextElementSibling.firstElementChild.firstElementChild.firstElementChild.innerText = categoryItemsHidden[i];
    } else {
        categoryGrids[i].nextElementSibling.firstElementChild.style.display = "none";
    }

    categoryShownRows.push(1);

}

console.log("categoryItemsAll" + categoryItemsAll)
console.log("categoryItemsShown" + categoryItemsShown)

function showMore(button, categoryIndex) {
    var clickedCategoryGrid = categoryGrids[categoryIndex];

    var noItemSpan = button.firstElementChild.firstElementChild;

    var categoryIndexItems = clickedCategoryGrid.childElementCount;

    console.log(clickedCategoryGrid)
    console.log(categoryIndexItems)

    if (categoryItemsHidden[categoryIndex] > 0 && (categoryItemsHidden[categoryIndex] - visibleColumns) > 0) {

        categoryItemsHidden[categoryIndex] -= visibleColumns;

        noItemSpan.innerText = categoryItemsHidden[categoryIndex];

        clickedCategoryGrid.style.gridTemplateRows = "repeat(" + (categoryShownRows[categoryIndex] + 1) + ", 1fr)";

        categoryShownRows[categoryIndex] += 1;

        console.log("ezután marad");

    }
    else {
        categoryItemsHidden[categoryIndex] -= visibleColumns;

        clickedCategoryGrid.style.gridTemplateRows = "repeat(" + (categoryShownRows[categoryIndex] + 1) + ", 1fr)";

        categoryShownRows[categoryIndex] += 1;

        clickedCategoryGrid.nextElementSibling.firstElementChild.style.display = "none";

        console.log("ezután elfogy");
    }

}


/* Show more items system */


/*
var category = {
    numberOfItems: 0,
    numberOfAvailableRows: 0,
    numberOfVisibleRows: 0
};



const categoryGrids = document.querySelectorAll("h2 + .content.grid");
let categoryArray = [];


for (let i = 0; i < categoryGrids.length; i++) {

    var newCategory = new category();

    category.numberOfItems = 1;
    console.log(i + " c: " + category.numberOfItems)

    categoryArray.push(newCategory)

}

function countRows() {
    for (let i = 0; i < categoryGrids.length; i++) {

        categoryGrids[i].numberOfAvailableRows = categoryGrids[i].numberOfItems / visibleColumns;

        console.log("numberOfAvailableRows:" + categoryGrids[i].numberOfAvailableRows)
        console.log("numberOfItems:" + categoryGrids[i].numberOfItems)

    }
}

countRows();

function showMore() {


}

*/