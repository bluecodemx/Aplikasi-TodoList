<?php
require_once "Model/Todolist.php";
require_once "Helper/input.php";
require_once "BusinessLogic/AddTodolist.php";
// start Function View Add ToDoList
function viewAddToDoList (){
    echo "Menambah TODO" .PHP_EOL;

    $todo = input ( "Todo (x Untuk Batal)" );

    if ($todo=="x"){
        echo "Batal Menambahkan".PHP_EOL;
    }
    else {
        addToDoList($todo);
    }

}