<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website
    <?php
    echo "Hello world and this is printed using php";
    // single line comment
    /* this 
    is
    a
    multi
    line
    comment
    */
$variable1 = 34;
$variable2 = 45;
echo $variable1;
echo $variable2;

echo $variable1 + $variable2;

// operators in PHP
// Arithmatic operators
echo "the value of variable1 + variable2 is";
echo $variable1 + $variable2;
echo "<br>";
echo "the value of variable1 - variable2 is";
echo $variable1 - $variable2;
echo "<br>";
echo "the value of variable1 * variable2 is";
echo $variable1 * $variable2;
echo "<br>";
echo "the value of variable1 / variable2 is";
echo $variable1 / $variable2;
echo "<br>";

// Assignment operators
$newVar = $variable1;
// $newVar += 1;
// $newVar -= 1;
// $newVar *= 1;
$newVar /= 1;
echo "the new variable is";
echo $newVar;
echo "<br>";
// Comparison operators
// echo "<h1> Comparison Operators </h1>";
echo "the value of 1==4 is";
echo var_dump(1==4);
echo "<br>";
echo "the value of 1!=4 is";
echo var_dump(1!=4);
echo "<br>";
echo "the value of 1<=4 is";
echo var_dump(1<=4);
echo "<br>";
echo "the value of 1>=4 is";
echo var_dump(1>=4);
echo "<br>";
// Increment/Decrement operators
echo $variable1++;
echo "<br>";
echo $variable1;
echo "<br>";
// echo $variable1--;
// echo ++$variable1;
// echo --$variable1;
// Logical Operators
// and (&&)
// or (||)
// xor
// !

// $myVar = (true and true);
// $myVar = (true and false);
// $myVar = (false and true);
// $myVar = (false and false);
//  $myVar = (true or false);
 $myVar = (true xor true);
// $myVar = (true xor false);
// $myVar = (false xor true);
// $myVar = (false xor false);

echo var_dump($myVar);
echo "<br>";



    ?>
     <?php
     define ('PI', 3.14);
    // echo "Hello world again";
    // Data types in PHP
    // 1.String
    // 2.Integer
    // 3.Float
    // 4.Boolean
    // 5.Array
    // 6.Object
    echo "Data Types <br>";
    $var = "this is a string";
    echo var_dump($var);
    echo "<br>";

    $var = 67;
    echo var_dump($var);
    echo "<br>";

    $var = 67.1;
    echo var_dump($var);
    echo "<br>";

    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo PI; 

    ?>
    </div>
</body>
</html>