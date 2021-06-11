<?php

require_once __DIR__ . "/../model/Todolist.php";
require_once __DIR__ . "/../logic/showTodolist.php";
require_once __DIR__ . "/../view/viewAddTodolist.php";
require_once __DIR__ . "/../view/viewRemoveTodolist.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowTodolist()
{
  while (true) {
    showTodolist();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "3. Ubah Todo" . PHP_EOL;
    echo "X. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan === "1") {
      viewAddTodolist();
    } elseif ($pilihan === "2") {
      viewRemoveTodolist();
    } elseif ($pilihan === "3") {
      echo "Belum dibuat";
    } elseif ($pilihan === "X") {
      // keluar
      break;
    } else {
      echo "Pilihan Tidak dimengerti" . PHP_EOL;
    }
  }
  echo "Sampai Jumpa Lagi" . PHP_EOL;
}
