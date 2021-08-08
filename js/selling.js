var selectedCategoryID = 0;
var selectedProcuctCounter = 0;

function selectCategory(selectedCategory) {

    selectedCategoryID = selectedCategory.id.slice(-1);
    selectedProcuctCounter = 0;

    var noCategorySelectedText = document.getElementById("no-category-selected")

    console.log(selectedCategoryID);

    var allCategoryProducts = document.querySelectorAll(".category-products-listing");
    var selectedCategoryProducts = document.getElementById("category-products-" + selectedCategoryID);


    // Hiding all product listings and displaying only the selected
    for (let index = 0; index < allCategoryProducts.length; index++) {
        allCategoryProducts[index].classList.add("hidden");

    }

    selectedCategoryProducts.classList.remove("hidden");
    noCategorySelectedText.classList.add("hidden")

    //Deselecting all categories listings and selecting only the clicked one

    var allCategoryButtons = document.querySelectorAll(".category");
    for (let index = 0; index < allCategoryButtons.length; index++) {
        allCategoryButtons[index].classList.remove("selected");
    }

    selectedCategory.classList.add("selected")

    var categorieInputs = selectedCategoryProducts.querySelectorAll("input")

    categorieInputs[0].focus();

}

var categories = document.querySelectorAll(".category")


document.onkeydown = (keyDownEvent) => {


    if (keyDownEvent.key == "ArrowLeft") {
        selectCategory(categories[selectedCategoryID]);
    }

    if (keyDownEvent.key == "ArrowRight") {
        selectCategory(categories[selectedCategoryID]);
    }

    if (keyDownEvent.key == "KeyL") {

        selectGivenAmountInput();
    }

    if (keyDownEvent.key == "ArrowDown") {
        keyDownEvent.preventDefault();

        selectProduct("next")
    }

    if (keyDownEvent.key == "ArrowUp") {
        keyDownEvent.preventDefault();

        selectProduct("previous")
    }
}

function selectGivenAmountInput() {
    var givenAmountInput = document.getElementById("given-amount-input")

    givenAmountInput.focus();

    console.log("g")
}

function selectProduct(direction) {
    var selectedCategoryProducts = document.getElementById("category-products-" + selectedCategoryID);
    var products = selectedCategoryProducts.querySelectorAll(".product-input input")

    if (direction == "next") {

        if (products.length - 1 == selectedProcuctCounter) {

            selectedProcuctCounter = 0;
            products[selectedProcuctCounter].focus();

        } else {

            selectedProcuctCounter += 1;
            products[selectedProcuctCounter].focus();

        }

    }

    if (direction == "previous") {

        if (selectedProcuctCounter == 0) {

            selectedProcuctCounter = products[products.length - 1];
            products[selectedProcuctCounter].focus();

        } else {

            selectedProcuctCounter -= 1;
            products[selectedProcuctCounter].focus();

        }

    }

    console.log("selected item number: " + selectedProcuctCounter)
}