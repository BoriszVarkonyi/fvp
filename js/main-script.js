

function newProceedToggle() {



    var form = document.getElementById("new-proceed-form");

    var add = document.getElementById("new-proceed-button");
    var back = document.getElementById("new-proceed-back-button");
    var submit = document.getElementById("new-proceed-submit-button");

    var input = document.getElementById("new-proceed-date");

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