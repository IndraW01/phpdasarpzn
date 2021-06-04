<?php
var_dump(join(".", [1, 2, 3, 4, 5]));
var_dump(explode(".", "Indra.Alpit.Fadli"));
var_dump(strtolower("INDRA WIJAYA"));
var_dump(trim("      INDRA      "));
var_dump(substr("PLG-0001", 4, 4));

$pelanggan = "PLG-0011";
$ambil = substr($pelanggan, 4, 4);
$jumlah = (int) $ambil + 1;
var_dump($jumlah);
if (strlen($jumlah) == 1) {
  $format = "PLG-000" . $jumlah;
} elseif (strlen($jumlah) == 2) {
  $format = "PLG-00" . $jumlah;
}
echo $format;
