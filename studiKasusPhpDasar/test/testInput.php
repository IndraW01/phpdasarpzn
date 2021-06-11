<?php

require_once "../helper/input.php";

$name = input("Masukkan Nama Anda");
echo "Hello $name" . PHP_EOL;

$sekolah = input("Sekolah Saya");
echo "Sekolah saya di $sekolah" . PHP_EOL;
