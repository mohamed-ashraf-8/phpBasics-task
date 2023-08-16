<?php
function checkNumbers($num1, $num2)
{
  if ($num1 === 50 || $num2 === 50 || ($num1 + $num2) === 50) {
    return true;
  } else {
    return false;
  }
}

$number1 = 40;
$number2 = 10;
$result = checkNumbers($number1, $number2);
echo $result ? 'True' : 'False';
?>

<br>

<?php
function checkPositiveNegative($num1, $num2)
{
  if (($num1 > 0 && $num2 < 0) || ($num1 < 0 && $num2 > 0)) {
    return true;
  } else {
    return false;
  }
}
$number1 = 3;
$number2 = -2;
$result = checkPositiveNegative($number1, $number2);
echo $result ? 'True' : 'False';
?>

<br>

<?php
function checkMultiples($number)
{
  if ($number > 0 && ($number % 5 == 0 || $number % 8 == 0)) {
    return true;
  } else {
    return false;
  }
}
$number = 40;
$result = checkMultiples($number);
echo $result ? 'True' : 'False';
?>

<br>

<?php
function calculate($operator, $num1, $num2)
{
  switch ($operator) {
    case '+':
      return $num1 + $num2;
    case '-':
      return $num1 - $num2;
    case '*':
      return $num1 * $num2;
    case '/':
      if ($num2 != 0) {
        return $num1 / $num2;
      } else {
        return "Cannot divide by zero";
      }
    default:
      return "Invalid operator";
  }
}
$operator = '+';
$number1 = 5;
$number2 = 6;
$result = calculate($operator, $number1, $number2);
echo $result;
?>