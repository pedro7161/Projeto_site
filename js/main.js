function reply_click() {

    for (let i = 1; i <= 4; i++) {
        var element = document.getElementById(i);
        element.classList.remove("active");
        var element = document.getElementById("tab" + i + "Id");
        element.classList.remove("show");
        element.classList.remove("active");
    }
    var element = document.getElementById(event.srcElement.id);

    element.classList.add("active")
    var element = document.getElementById("tab" + event.srcElement.id + "Id");
    element.classList.add("show");
    element.classList.add("active");
}