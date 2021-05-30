<?php


$connect = mysqli_connect("localhost", "root", "", "phpdasar") or die(mysqli_error($connect));

$result = mysqli_query($connect, "SELECT * FROM mahasiswa");
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
  // $data[] = $row;
  var_dump($row);
  // echo $row["nama"] . PHP_EOL;
  // foreach ($row as $r => $value) {
  //   echo $r  . " : " . $value . PHP_EOL;
  // }
}

// $row = mysqli_fetch_assoc($result);
// var_dump($row);
// foreach ($data as $r => $value) {
//   echo $r  . " : " . $value . PHP_EOL;
// }
