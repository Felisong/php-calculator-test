<?php 
function handleOperator($x, $operator, $y){
  var_dump($operator);
  $total = 0;
  $x = floatval($x);
  $y = floatval($y);

  // numbers are Valid
  switch ($operator){
    case '+':
      $total = $x + $y;
      break;
    case '-':
       $total = $x - $y;
      break;
    case '/':
       $total = $x / $y;
      break;
    case '*':
       $total = $x * $y;
      break;
    default:
      print "Not a valid Operator, only use *, / , + or -";
      break;
  }
  print $total;
}

if ($argv[1] && $argv[2] && $argv[3]){
handleOperator($argv[1], $argv[2], $argv[3]);
} else {
  print "You must provide 2 integers and an operator. Such as : 5 * 2";
}