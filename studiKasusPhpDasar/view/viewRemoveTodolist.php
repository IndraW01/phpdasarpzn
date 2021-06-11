<?php

require_once __DIR__ . "/../logic/removeTodolist.php";
require_once __DIR__ . "/../helper/input.php";

function viewRemoveTodolist()
{
  echo "HAPUS TODOLIST" . PHP_EOL;

  $hapusTodo = input("Hapus Todo (X untuk kembali)");

  if ($hapusTodo === "X") {
    echo "Batal Menghapus Todo" . PHP_EOL;
  } elseif ((int)$hapusTodo) {
    $succes = removeTodolist($hapusTodo);

    if ($succes) {
      echo "Sukses Menghapus Todo nomor $hapusTodo" . PHP_EOL;
    } else {
      echo "Gagal Mneghapus Todo nomor $hapusTodo" . PHP_EOL;
    }
  } else {
    echo "Hanya bisa memasukkan Angka" . PHP_EOL;
  }

  // if ($hapusTodo === "X") {
  //   // batal;
  //   echo "Batal menambah Todo" . PHP_EOL;
  // } else {
  //   removeTodolist($hapusTodo);
  // }
}
