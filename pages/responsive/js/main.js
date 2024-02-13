let nav = document.querySelector('nav')[0];

document.getElementById('cheeseBurger').onclick = function () {
    if(nav.style.dispaly == 'block') {
        nav.style.dispaly = 'none';
    } else {
        nav.style.dispaly = 'block';
    }
}