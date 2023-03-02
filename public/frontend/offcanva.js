
// var offc = document.getElementById('offc');
// var btn = document.getElementById('bar');
// function myfunction() {
//     document.getElementById("offc").style.display = "none";
// }


function openNav() {
    document.getElementById("offc").style.display = "block";
    // document.getElementById("main").style.marginLeft = "250px";
    // console.log('hello');
    document.getElementById("bar").style.display = "none";
    document.getElementById("bar1").style.display = "block";
}

function closeNav() {
    document.getElementById("offc").style.display = "none";
    // document.getElementById("main").style.marginLeft = "0";
    document.getElementById("bar1").style.display = "none";
    document.getElementById("bar").style.display = "block";

}

document.onclick = function (e) {
    if (e.target.id !== 'offc' && e.target.id !== 'bar') {
        document.getElementById("offc").style.display = "none";
        console.log(e.target);

    }
    else {
        document.getElementById("offc").style.border = "block";
        console.log('else are working')

    }
}

