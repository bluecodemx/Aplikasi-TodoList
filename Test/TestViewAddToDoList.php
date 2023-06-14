<?php
require_once "View/ViewAddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodolist.php";

addToDoList("Yusuf");
addTodoList("Farizan");
addTodoList("Eko");
viewAddToDoList();
showToDoList();