<?php
require_once "Model/Todolist.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveToDoList.php";
require_once "Helper/input.php";


function viewShowToDoList (){
    while (true){
    showToDoList();

    echo "Menu".PHP_EOL;
    echo "1. Tambah Todo". PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" .PHP_EOL;

    $pilihan = input( "Pilih");

    if ($pilihan ==1 ){
        viewAddToDoList();
    }elseif ($pilihan == "2"){
        viewRemoveToDoList();
    }elseif ($pilihan == "x"){
        break;
    }else {
        echo "Pilihan Anda Tidak Dimengerti";
    }

}
echo "Sampai Jumpa Lagi". PHP_EOL;
}