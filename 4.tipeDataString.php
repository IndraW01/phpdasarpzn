<?php

echo 'Name : ';
echo 'Indra Wijaya';
echo "\n";

echo "Nama : ";
echo "Indra\t Wijaya\n";

// Menggunakan Heredoc
echo <<<INDRA
Selamat Belajar PHP
Sekarang, Kita Belajar tipe data string
ini adalah cara ketiga membuat string
bisa menggunakan heredoc\n
INDRA;

// Menggunakan Nowdoc
echo <<<'INDRA'
Selamat Belajar PHP
Sekarang, Kita Belajar tipe data string
ini adalah cara ketiga membuat string
bisa menggunakan Nowdoc
INDRA;
