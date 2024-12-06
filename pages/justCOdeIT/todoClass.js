class ToDo {
    finishedItems = {};

    constructor(startItems = {}) {
        this.todoItems =String(startItems) == 'null' ? {} : startItems;
    }

    editItem(title, description) { // if non existent, create new item

        if (title.length < 10 || description.length < 10) {
            alert('Error: Titel of Descriptie is te klein om op te slaan.');
        } else {
            this.todoItems[title] = description;
            
            window.dispatchEvent(
                new CustomEvent("itemEditted", {
                  bubbles: true,
                  detail: { 
                    title: title,
                    desciprtion: description
                   },
                }),
              );
        }
    }

    finishItem(title) {
        this.finishItem[title] = this.todoItems[title];
        delete this.todoItems[title];
    }

    deleteItem(title) {
        if (this.finishItem[title]) {
            delete this.finishItem[title];
        } else {
            delete this.todoItems[title];
        }
    }
}

export { ToDo };