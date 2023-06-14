<?php
require_once "Model/Todolist.php";
require_once "BusinessLogic/AddTodolist.php";
require_once "BusinessLogic/RemoveTodolist.php";
require_once "BusinessLogic/ShowTodoList.php";

addToDoList("yusuf");
addToDoList("Farizan");
showToDoList();
removeTodoList(2);
showToDoList();

$success = removeTodoList(4);
var_dump($success);
showToDoList();