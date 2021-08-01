function selectCategory(x) {
    var selectedCategory = x;
    var selectedCategoryID = selectedCategory.id.slice(-1);

    console.log(selectedCategoryID);

    var allCategoryProducts = document.querySelectorAll(".category-products-listing");
    var selectedCategoryProducts = document.getElementById("category-products-" + selectedCategoryID);


    // Hiding all product listings and displaying only the selected
    for (let index = 0; index < allCategoryProducts.length; index++) {
        allCategoryProducts[index].classList.add("hidden");

    }

    selectedCategoryProducts.classList.remove("hidden");

    //Deselecting all categories listings and selecting only the clicked one

    var allCategoryButtons = document.querySelectorAll(".category");
    for (let index = 0; index < allCategoryButtons.length; index++) {
        allCategoryButtons[index].classList.remove("selected");
    }

    selectedCategory.classList.add("selected")
}

function expandCartItem(x) {
    var selectedItem = x;
    var selectedItemDetails = selectedItem.nextElementSibling;

    selectedItemDetails.classList.toggle("closed")
}

var selectedInput;

function setSelectedInput(input) {

    var allInputs = document.querySelectorAll("input");

    for (let index = 0; index < allInputs.length; index++) {
        allInputs[index].classList.remove("active")
    }


    if (selectedInput == input) {

        selectedInput.classList.remove("active")
        selectedInput = null;


    } else {

        selectedInput = input;
        selectedInput.classList.add("active")

    }

}

function numPad(clickedValue) {
    selectedInput.value += clickedValue;

}

function backSpace() {

    if (selectedInput.value.length > 1) {

        var newValue = selectedInput.value.slice(0, -1);
        selectedInput.value = newValue;

    } else {
        selectedInput.value = null;
    }

}