import { ToDo } from './todoClass.js';

let todoList = document.getElementById('items');
let addItem = document.getElementById('add');

let i;

let todo = new ToDo(JSON.parse(window.localStorage.getItem('items')));

todo.editItem('test11111111111111111111111111', 'test1111111111111111111111111');

for(i of Object.keys(todo.todoItems)) {
    let li = document.createElement('li');
    li.innerHTML = i;

    todoList.appendChild(li);
}

addItem.addEventListener('click', function () {
    let name = prompt("Enter task name.");

    if(name != '') {
        let des = prompt('Enter Omschrijving.');

        if(des) {
            todo.editItem(name,des);
        }
    }
});

window.addEventListener('itemEditted', function (e) {
    let li = document.createElement('li');
    li.innerHTML = e.detail.title;

    todoList.appendChild(li);

    window.localStorage.setItem('items', JSON.stringify(todo.todoItems));
});