<?php

// aplikasin Todolist
$todoList = [];

// function logic
// 1. lihat data todo
function liatData()
{
  global $todoList;

  echo "TODOLIST" . PHP_EOL;
  foreach ($todoList as $number => $value) {
    echo "$number. $value" . PHP_EOL;
  }
}
// 2. tambah Data todo
function tambahData(string $todo)
{
  global $todoList;

  $number = count($todoList) + 1;
  $todoList[$number] = $todo;
}
// 3. hapus Data todo
function hapusData($number): bool
{
  global $todoList;

  if ($number > count($todoList)) {
    return false;
  }

  for ($i = $number; $i < count($todoList); $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }
  unset($todoList[count($todoList)]);
  return true;
}
// 4. ubah data todo
function ubahData($number, $todo)
{
  global $todoList;

  $todoList[$number] = $todo;
}


// function input
function input($pilih): string
{
  echo "$pilih : ";
  $result = fgets(STDIN);
  return trim($result);
}


//function view data
// 1. view liat data todo
function viewLiatData()
{
  while (true) {
    liatData();

    echo "PILIH MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "3. Ubah Todo" . PHP_EOL;
    echo "X. Kembali" . PHP_EOL;

    $pilih = input("Masukkan Pilihan Menu anda (X untuk keluar)");
    if ($pilih == "1") {
      viewTambahTodo();
    } elseif ($pilih == "2") {
      viewHapusTodo();
    } elseif ($pilih == "3") {
      viewUbahTodo();
    } elseif ($pilih == "X") {
      break;
    } else {
      echo "Inputan Anda salah" . PHP_EOL;
    }
  }
  echo "Sampai jumpa Lagi" . PHP_EOL;
}
// 2. view tambah todo
function viewTambahTodo()
{
  echo "TAMBAH TODO" . PHP_EOL;
  $todo = input("Judul Todo (Tekan X untuk kembali)");
  if ($todo == "X") {
    // kembali
  } else {
    tambahData($todo);
  }
}
// 3. view hapus todo
function viewHapusTodo()
{
  global $todoList;

  echo "HAPUS TODO" . PHP_EOL;
  $todo = input("Pilih Todo (Tekan X untuk kembali)");

  if ($todo == "X") {
    // kembali
  } elseif ((int) $todo) {
    $succes = hapusData($todo);
    if ($succes) {
      echo "Todo nomor $todo berhasil dihapus" . PHP_EOL;
    } else {
      echo "Todo nomor $todo gagal dihapus" . PHP_EOL;
    }
  } else {
    echo "yang anda masukkan bukan Angka" . PHP_EOL;
  }
}
// 4. view ubah todo
function viewUbahTodo()
{
  global $todoList;

  echo "UBAH TODO" . PHP_EOL;
  $todoIndex = input("Pilih Todo (Tekan X jika kembali)");
  if ($todoIndex > count($todoList)) {
    echo "Todo yang dipilih tidak ada" . PHP_EOL;
    return false;
  }
  echo "Ubah Judul" . PHP_EOL;
  echo $todoList[$todoIndex] . PHP_EOL;

  $todo = input("Masukkan nama Todo baru");

  ubahData($todoIndex, $todo);
}


// tes App

viewLiatData();
