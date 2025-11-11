# PHP Calculator Test

Hi, I'm Carolina. Just making this today to brush up and learn syntax for PHP.

## PHP Notes For Myself

- variables are declared and used with $ before the name
  %x = 5;
  print "$5";

If I use single quotations I must dot annotate.
print 'its' .$5.

- access attributes in objects with -> instead of .
  $dog->getName();
  $dog->bark();

- Global variables cannot be used within functions without the globals keyword

declare globals $variableWanted at the top of the function to have access OR
$GLOBALS['variableName'] can access it directly as well.

- Local variables can be stored and saved using static.
  static $x = 0
  will maintain the value

- echo vs print
  echo is slightly faster, has no return value and can take multiple parameters.
  print has a return value of 1, and can only take 1 parameter.

## Python Notes for Myself

- reads a lot more in english (instead of && they use 'and')
- functions, and conditions end with ':'
- variable declarations seem easier than JS
- I like the dictionary that can be used in python
- python does not use ;
