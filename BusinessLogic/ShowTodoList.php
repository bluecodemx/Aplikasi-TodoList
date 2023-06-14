<?php
// function Show ToDoList
function showToDoList (){
    global $todoList;
    echo "TODO List".PHP_EOL;
    foreach ($todoList as $number => $value){
        echo "$number.$value".PHP_EOL;
    }
}