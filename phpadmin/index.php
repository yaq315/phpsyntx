<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 // task1

 $year=2013;
 if ($year%4==0)
 echo   "This year is a leap year" ."<br>";
else 
echo  " This year is not a leap year "."<br>";

// task2

$temp=27;
if($temp<20)
echo "it is winter"."<br>";
else($temp>=20);
echo  "it is summer"."<br>";

// task3
function sum($firstint, $secondint){
    if ($firstint=== $secondint){
    $int=($firstint + $secondint)*3;
}else {
    $int=($firstint + $secondint);}
    return $int;
}
$firstint=2;
$secondint=2;
echo sum($firstint, $secondint)."<br>";

// task4

function calc($firstint, $secondint){
    if (($firstint+ $secondint)==30){
  return "true";
}else {
   return "false";
}
}
$firstint=10;
$secondint=10;
echo calc($firstint, $secondint)."<br>";

// task5
$num=20;
if ($num%3==0)
echo   "true" ."<br>";
else 
echo  "false"."<br>";

//task6
$number=9;
if ($number>20 && $number<50){
echo "true"."<br>";
}
else{
echo "false"."<br>";}

// task7

$intger=[1,5,9];
$max=max($intger);
echo $max ."<br>";

// task8
function calculat($units){
   $x=0;
    if($units<=50){
      $x=$units*2.50;
    }elseif($units<=150){
        $x=(50*2.50)+(($units-50)*5.00);
    }elseif($units<=250){
        $x=(50*2.50)+(150*5.00)+(($units-150)*6.20);
    }else{
        $x=(50*2.50)+(150*5.00)+(250*6.20)+(($units-250)*7.50);
    }
    return $x;
};
$units=200;
echo calculat($units)."<br>";

// task9
$number1=20;
$number2=10;
$operation="*";
$result="";
switch ($operation){
    case "+";
    $result=$number1+$number2;
    break;
    case "-";
    $result=$number1-$number2;
    break;
    case "*";
    $result=$number1*$number2;
    break;
    case "/";
    if ($number2 !=0)
    $result=$number1/$number2;
    else 
    $result='error';
    break;
    default:$result= "invalid"; 
};
echo "  $number1 $operation $number2 = $result"."<br>";

// task10
$age=18;
if($age>=18)
echo "is eligible to vote"."<br>";
else 
echo "is no eligible to vote"."<br>";

// task11
$numb=-60;
if($numb<0){
echo "negative"."<br>";
}elseif ($numb>0){
echo "positve"."<br>";
}else {
echo "zerro"."<br>";}

// task12
$marks= [60,86,95,63,55,74,79,62,50] ;
$total= array_sum($marks);
$count=count($marks);
$avg=$total/$count;
echo "avarege:$avg"."<br>";  
if ($avg<60){
    echo "grade:F";
}elseif ($avg<70){
 echo "grade:D";
}elseif ($avg<80){
    echo "grade:C";
   }elseif ($avg<90){
    echo "grade:B";
   }else{
    echo "grade:A";
   }
    ?>
</body>
</html>
