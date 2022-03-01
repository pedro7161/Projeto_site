function reply_click() {

    for (let i = 1; i <= 4; i++) {
        var element = document.getElementById(i);

        element.classList.remove("active");

        var element = document.getElementById("tab" + i + "Id");

        element.classList.remove("show");

        element.classList.remove("active");
    }

    var element = document.getElementById(event.srcElement.id);

    element.classList.add("active");
    var element = document.getElementById("tab" + event.srcElement.id + "Id");
    element.classList.add("show");
    element.classList.add("active");

    if (element != document.getElementById("tab1Id")) {
        var fundo = document.getElementById("bodyfundo");
        fundo.classList.remove("backimage");
    } else {
        var fundo = document.getElementById("bodyfundo");
        fundo.classList.add("backimage");
    }


}

function opendeck(id) {

    var element = document.getElementById(id).innerText;


    window.open("./deck.php?name=" + element, "_self");


}

// function backgroundcolor(id) {

//     // alert(id)
//     if (id == "a") {
//         var element = document.getElementById("a");
//         element.classList.add("active");
//         // id.classList.add("active"); por alguma razao nao assume , mesmo tento o mesmo valor
//         var elment2 = document.getElementById("b");
//         elment2.classList.remove("active");
//         element.style.backgroundColor = '#007bff';
//         element.style.color = '#fff';
//         elment2.style.backgroundColor = null;
//         elment2.style.color = null;
//         var dark = document.getElementsByClassName('darkmode')

//         for (var i = 0; i < dark.length; i++) {
//             document.getElementsByClassName('darkmode')[i].style.backgroundColor = "black";
//             document.getElementsByClassName('darkmode')[i].style.Color = "white";
//         }

//     }
//     if (id == "b") {
//         var element = document.getElementById("b");
//         element.classList.add("active");
//         // id.classList.add("active");
//         var elment2 = document.getElementById("a");
//         elment2.classList.remove("active");
//         element.style.backgroundColor = '#007bff';
//         element.style.color = '#fff';
//         elment2.style.backgroundColor = null;
//         elment2.style.color = null;
//         var dark = document.getElementsByClassName('darkmode');

//         for (var i = 0; i < dark.length; i++) {
//             document.getElementsByClassName('darkmode')[i].style.backgroundColor = "white";
//             document.getElementsByClassName('darkmode')[i].style.Color = "black";
//         }
//     }
//     // style="color: #fff;
//     // background-color: #007bff;"
// }