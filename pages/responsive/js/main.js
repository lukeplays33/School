let nav = document.getElementsByTagName('nav')[0];

document.getElementById('cheeseBurger').onclick = function () {
    alert(nav.style.display)
    if(nav.style.display == 'flex') {
        nav.style.display = 'none';
    } else {
        nav.style.display = 'flex';
    }
}