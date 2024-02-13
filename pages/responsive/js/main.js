let nav = document.getElementsByTagName('nav')[0];

document.getElementById('cheeseBurger').onclick = function () {
    if(nav.style.dispaly == 'flex') {
        nav.style.dispaly = 'none';
    } else {
        nav.style.dispaly = 'flex';
    }
}