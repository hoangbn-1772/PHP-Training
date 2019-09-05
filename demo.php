<?php

$number = 14;
$numbers = array(321, 312, 3, 4, 5, 45, 56, 5, 7, 6, 787, 8, 7, 2);
$nameArray = array('Hoa', 'Nam', 'Hieu');
$str = 'Chẳng Gì Đẹp Đẽ Trên Đời Mãi | Khang Việt - Solo Music Video';

if (kiem_tra_so_chan($number)) {
  echo 'Số chẵn' . '<br/>';
} else {
  echo 'Số  lẻ' . '<br/>';
}

echo 'Tong la: ' . sum(10, 100) . '<br/>';
echo 'a = ' . increment() . '<br/>';
echo 'a = ' . increment() . '<br/>';
echo 'So chia het cho 3: ' . ' ';
divForThree();
echo '<br/>';

echo 'CAC HAM XU LY CHUOI:'.'<br/>';
echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z')).'<br/>';
echo addslashes ("Freetuts's a website learning online").'<br/>';
echo stripslashes("Mot so ham \'xu ly chuoi\' trong PHP").'<br/>';
echo crc32 ('hoangbn').'<br/>';
var_dump(explode(' ', $str));
echo '<br/>';
echo implode('-', $numbers).'<br/>';
echo strip_tags('<b>freetuts.net</b>', 'b').'<br/>';

print_r(array_count_values($numbers));
echo '<br/>';
array_push($nameArray, 'Hao', 'HHH').'<br/>';
print_r($nameArray);

function kiem_tra_so_chan($number)
{
  if ($number % 2 == 0)
    return true;
  else return false;
}

function sum($number1, $number2, $number3 = -2)
{
  return ($number1 + $number2 + $number3);
}

/**
 * variable static. Chi co gia tri trong function
 */
function increment()
{
  static $a = 0;
  return $a++;
}

/**
 * Tim kiem tuan tu
 */
function divForThree()
{
  global $numbers;
  foreach ($numbers as $value) {
    if ($value % 3 == 0) {
      echo $value . ' ';
    }
  }
}
