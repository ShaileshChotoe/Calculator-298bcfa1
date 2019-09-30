<?php

$operator;

$result;

echo 'Noem getal1: ';

$var1 = readline();

echo 'Kies tussen: + , - , x of : ';

$operator = readline();

echo 'Noem getal2: ';

$var2 = readline();

selectOperator($operator, $var1, $var2);

function selectOperator($operator, $var1, $var2)
{
  switch ($operator)
  {
    case '+':
    $result = $var1 + $var2;
      echo $var1 . ' + ' . $var2 . ' = ' . $result;
      break;
    case '-':
    $result = $var1 - $var2;
      echo $var1 . ' - ' . $var2 . ' = ' . $result;
      break;
      case ':':
      $result = $var1 / $var2;
        echo $var1 . ' : ' . $var2 . ' = ' . $result;
        break;
        case 'x':
        $result = $var1 * $var2;
          echo $var1 . ' x ' . $var2 . ' = ' . $result;
          break;
    default:
      echo "Je hebt een verkeerde operator ingevoerd";
      break;
  }
}



 ?>
