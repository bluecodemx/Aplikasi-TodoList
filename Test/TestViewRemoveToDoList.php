<?php
require_once "Model/Todolist.php";
require_once "View/ViewRemoveToDoList.php";
require_once "BusinessLogic/AddTodolist.php";
require_once "BusinessLogic/ShowTodoList.php";

addToDoList("Muhammad");
addToDoList("Yusuf");
addToDoList("Farizan");

showToDoList();
viewRemoveToDoList();
showToDoList();