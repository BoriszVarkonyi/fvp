

function newProceedToggle() {



    var form = document.getElementById("page-button-form");

    var add = document.getElementById("page-button-button");
    var back = document.getElementById("page-button-back-button");
    var submit = document.getElementById("page-button-submit-button");

    var input = document.getElementById("page-button-input");

    form.classList.toggle("opened")

    add.classList.toggle("hidden")
    back.classList.toggle("hidden")
    submit.classList.toggle("hidden")

    input.classList.toggle("hidden")

}

function select(x) {
    var selectedItem = x;

    var input = selectedItem.parentNode.previousElementSibling;

    var panel = selectedItem.parentNode;

    input.value = selectedItem.innerText;

    panel.classList.toggle("hidden")

}

function openSelect(x) {
    var selectedItem = x;
    var panel = selectedItem.nextElementSibling

    panel.classList.remove("hidden")
}

function closeSelect(x) {
    var selectedItem = x;
    var panel = selectedItem.nextElementSibling

    panel.classList.add("hidden")
}

function copyToNextCell(x) {
    var button = x;
    var buttonWrapper = button.parentNode;
    var previousCell = buttonWrapper.previousElementSibling;
    var textToCopy = previousCell.firstElementChild.innerText;
    var nextCell = buttonWrapper.nextElementSibling;
    var input = nextCell.firstElementChild.firstElementChild;

    input.value = textToCopy;
}