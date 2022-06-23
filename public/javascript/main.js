let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .flex-navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

document.getElementById("filter-clear").onclick = function () 
{
    // Lấy danh sách checkbox
    var checkboxes = document.getElementsByName('name[]');

    // Lặp và thiết lập Uncheck
    for (var i = 0; i < checkboxes.length; i++){
        checkboxes[i].checked = false;
    }
};