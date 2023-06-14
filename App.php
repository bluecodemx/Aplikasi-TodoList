<?php
// Start Require Business Logic File
    require_once "BusinessLogic/AddTodolist.php";
    require_once "BusinessLogic/RemoveTodolist.php";
    require_once "BusinessLogic/ShowTodoList.php";
    require_once "View/ViewAddTodoList.php";
    require_once "View/ViewRemoveToDoList.php";
    require_once "View/ViewShowToDoList.php";
    require_once "Helper/input.php";
    require_once "Model/Todolist.php";
// Finish Require
echo "Aplikasi TODOlist".PHP_EOL;
viewShowToDoList();
