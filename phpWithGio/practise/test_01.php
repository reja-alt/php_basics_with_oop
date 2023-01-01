<?php
if(isset($_POST['save'])) {
        $todoTask = $_POST['todo'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo List</title>
        <style>
        p {
                margin-right: 20px;
        }

        #result {
                display: flex;
                margin: 10px;
                /* text-align: center; */
                align-items: center;
        }

        .show-item {
                display: flex;
                margin: 10px;
                /* text-align: center; */
                align-items: center;
        }

        button {
                width: 100px;
                height: 30px;
                border: none;
                border-radius: 10px;
                font-weight: 600;
                margin-right: 10px;
        }
        </style>
</head>

<body>
        <form action="" method="POST">
                <h1>Todo List</h1>
                <input type="text" name="todo" value="<?php echo $todoTask?>" id="todo">
                <button class="btn btn-sm" type="submit" name="save" id="save">Add</button>
        </form>
        <h2>Current Todos</h2>
        <h4>Task</h4>
        <div id="result">

        </div>

        <script>
        var todoData = document.getElementById('save');
        var todo = document.getElementById('todo');
        var showData = document.querySelector('#result');

        todoData.addEventListener('click', (e) => {
                e.preventDefault();
                // console.log(p);
                var pElement = document.createElement("p");
                var deleteButton = document.createElement("button");
                var div = document.createElement("div");

                div.classList.add('show-item');
                deleteButton.setAttribute('id', 'item');
                div.appendChild(pElement);
                div.appendChild(deleteButton);
                showData.appendChild(div);
                pElement.innerText = todo.value;
                deleteButton.innerText = 'delete';
                todo.value = '';
                // console.log('dsad');
                var deleteId = document.querySelector('#item');
                deleteId.addEventListener('click', (e) => {
                        e.preventDefault();
                        var item = document.querySelector('.show-item');
                        // console.log(item);
                        item = '';
                });
        });
        </script>
</body>

</html>