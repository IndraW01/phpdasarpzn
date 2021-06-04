 <?php

  // function palindrome(string $string){

  //   $temp = "";
  //   for($i = strlen($string) - 1; $i >= 0; $i--){
  //     $temp .= $string[$i];
  //   }
  //   if($string == $temp){
  //     echo "true" . PHP_EOL;
  //   }else{
  //     echo "false" , PHP_EOL;
  //   }
  // }

  function palindrome(string $string)
  {

    for ($i = 0; $i <= strlen($string) - 1; $i++) {
      $indexAkhir = (strlen($string) - $i - 1);
      $indexAwal = $i;
      if ($string[$indexAwal] != $string[$indexAkhir]) {
        return "false" . PHP_EOL;
      }
    }
    return "true";
  }

  echo palindrome("kataak");
  echo palindrome("ada");

  ?>