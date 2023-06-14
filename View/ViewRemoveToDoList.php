<?php
require_once "Helper/input.php";
require_once "BusinessLogic/RemoveTodolist.php";
function viewRemoveToDoList(){
    echo "Menghapus TODO".PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan=="x"){
        echo "Batal Menghapus TODO".PHP_EOL;
    } else{
        $success = removeTodoList($pilihan);
        if ($success){
            echo "Sukses Menghapus todo Nomor $pilihan".PHP_EOL;
        } else {
            echo "Gagal Menghapus todo Nomor $pilihan".PHP_EOL;
        }
    }

}
