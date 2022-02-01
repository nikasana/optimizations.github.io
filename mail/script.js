//get all items
const list_items = document.querySelectorAll('.menu-item');
const lists = document.querySelectorAll('.feature-img');
const lists2 = document.querySelectorAll('.left-inner');
const lists3 = document.querySelectorAll('.middle-inner');
const lists4 = document.querySelectorAll('.right-inner');

let draggedItem = null;
//loop through all features
for (let i = 0; i < list_items.length; i++) {
    const item = list_items[i];

    item.addEventListener('dragstart', function () {
        draggedItem = item;
        setTimeout(function () {
            //item.style.display = 'none';
            item.style.backgroundColor = '#eee';


        }, 0)
    });

    item.addEventListener('dragend', function () {
        setTimeout(function () {
            //draggedItem.style.display = 'block';
            item.style.backgroundColor = 'white';

            draggedItem = null;
        }, 0);
    })
    //loop through vertical lists
    for (let j = 0; j < lists.length; j++) {
        const list = lists[j];

        list.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        list.addEventListener('dragenter', function (e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
        });

        list.addEventListener('dragleave', function (e) {
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        });

        list.addEventListener('drop', function (e) {
            console.log('drop');
            //this.append(draggedItem);
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
            console.log(draggedItem.id);
            //this.classList.add(draggedItem.id);

            this.className = 'feature-img ' + draggedItem.id;


            let stringNum = "i" + String(j + 1);
            let inputOfNum = document.getElementById(stringNum);
            inputOfNum.value = draggedItem.id;
            //this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        });
    }
    //loop through horizontal items
    for (let j = 0; j < lists2.length; j++) {
        const list = lists2[j];

        list.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        list.addEventListener('dragenter', function (e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
        });

        list.addEventListener('dragleave', function (e) {
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        });

        list.addEventListener('drop', function (e) {
            console.log('drop');
            //this.append(draggedItem);
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
            console.log(draggedItem.id);
            //this.classList.add(draggedItem.id);

            this.className = 'feature-img ' + draggedItem.id + ' bottomitem';
            //this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';


            let stringNum = "i" + String(j + 1 + 6);
            let inputOfNum = document.getElementById(stringNum);
            inputOfNum.value = draggedItem.id;
        });
    }
    for (let j = 0; j < lists3.length; j++) {
        const list = lists3[j];

        list.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        list.addEventListener('dragenter', function (e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
        });

        list.addEventListener('dragleave', function (e) {
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        });

        list.addEventListener('drop', function (e) {
            console.log('drop');
            //this.append(draggedItem);
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
            console.log(draggedItem.id);
            //this.classList.add(draggedItem.id);

            this.className = 'feature-img ' + draggedItem.id + ' bottomitem';
            //this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
            let stringNum = "i" + String(j + 1 + 7);
            let inputOfNum = document.getElementById(stringNum);
            inputOfNum.value = draggedItem.id;
        });
    }
    for (let j = 0; j < lists4.length; j++) {
        const list = lists4[j];

        list.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        list.addEventListener('dragenter', function (e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
        });

        list.addEventListener('dragleave', function (e) {
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        });

        list.addEventListener('drop', function (e) {
            console.log('drop');
            //this.append(draggedItem);
            this.style.backgroundColor = 'rgba(0, 0, 0, 0)';
            console.log(draggedItem.id);
            //this.classList.add(draggedItem.id);

            this.className = 'feature-img ' + draggedItem.id + ' bottomitem';
            //this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
            let stringNum = "i" + String(j + 1 + 10);
            let inputOfNum = document.getElementById(stringNum);
            inputOfNum.value = draggedItem.id;
        });
    }
}



