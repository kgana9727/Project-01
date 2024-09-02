<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">To-Do List</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-3">
                    <input type="text" class="form-control" id="newTask" placeholder="Enter a new task">
                </div>
                <div class="d-grid gap-2 mb-4">
                    <button class="btn btn-primary" onclick="addTask()">Add Task</button>
                </div>
                <ul class="list-group" id="taskList">
                    <!-- Task items will be dynamically added here -->
                </ul>
            </div>
        </div>
    </div>

    <script>
        function addTask() {
            var taskInput = document.getElementById('newTask');
            var taskText = taskInput.value.trim();
            if (taskText === '') {
                alert('Please enter a task.');
                return;
            }

            var taskList = document.getElementById('taskList');

            var listItem = document.createElement('li');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';

            var taskSpan = document.createElement('span');
            taskSpan.textContent = taskText;

            var buttonGroup = document.createElement('div');

            var editButton = document.createElement('button');
            editButton.className = 'btn btn-secondary btn-sm me-2';
            editButton.textContent = 'Edit';
            editButton.onclick = function() {
                var newTaskText = prompt('Edit your task:', taskSpan.textContent);
                if (newTaskText !== null && newTaskText.trim() !== '') {
                    taskSpan.textContent = newTaskText.trim();
                }
            };

            var toggleButton = document.createElement('button');
            toggleButton.className = 'btn btn-success btn-sm';
            toggleButton.textContent = 'Activate';
            toggleButton.onclick = function() {
                if (listItem.classList.contains('completed')) {
                    listItem.classList.remove('completed');
                    toggleButton.textContent = 'Activate';
                    toggleButton.className = 'btn btn-success btn-sm';
                } else {
                    listItem.classList.add('completed');
                    toggleButton.textContent = 'Completed';
                    toggleButton.className = 'btn btn-warning btn-sm';
                }
            };

            buttonGroup.appendChild(editButton);
            buttonGroup.appendChild(toggleButton);

            listItem.appendChild(taskSpan);
            listItem.appendChild(buttonGroup);

            taskList.appendChild(listItem);
            taskInput.value = '';
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .completed {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</body>
</html>
