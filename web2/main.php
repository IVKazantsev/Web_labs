<?php
// 1
echo "1 task\n";
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and any line";
echo "Your order is: $very_bad_unclear_name.\n";

// 2
echo "\n2 task\n";
$a = 100;
echo $a;
echo "\n";
$b = 100.1;
echo "$b\n";
echo 13 - 1;
$last_month = 1187.23; $this_month = 1089.98;
echo "\nВ прошлом месяце я потратил на ", $last_month - $this_month, " больше\n";

// 3
echo "\n11 task\n";
$num_languages = 4; $months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "$days_per_language дня в среднем у нее ушло на изучение каждого языка\n";

// 4
echo "\n12 task\n";
echo 8**2, "\n";

// 5
echo "\n13 task\n";
$my_num = 100; $answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
echo $answer -= $my_num, "\n";

// 6
echo "\n14 task\n";
$a=10; $b=3;
echo "Остаток от деления $a на $b = ", $a % $b, "\n";
$a=7; $b=2;
if($a % $b == 0) echo "$a на $b делится\n";
else echo "$a на $b делится с остатком ", $a % $b, "\n";
echo "2 в 10 степени = ", $st = pow(2, 10), "\n";
echo "Корень из 245 = ",sqrt(245) , "\n";
$mas = array(4, 2, 5, 19, 13, 0, 10); $result = 0;
foreach ($mas as $int) $result += $int**2;
echo "Корень из суммы квадратов элементов данного массива = ", $result = sqrt($result), "\n";
echo "Корень из 379 с округлениями: ", round(sqrt(379)),' ',
    round(sqrt(379), 1),' ', round(sqrt(379), 2), "\n";
echo "Корень из 587 с округлениями: ";
$mas = Array("floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587)));
foreach ($mas as $int) echo $int, ' ';
echo "\nМинимальное число: ", min(4, -2, 5, 19, -130, 0, 10) , ", максимальное: ",
    max(4, -2, 5, 19, -130, 0, 10) , "\n";
echo "Случайное число от 1 до 100: ", rand(1, 100), "\n";
$mas = array_fill(0, 10, 0);
$i = 0;
echo "Массив с 10 случайными числами: ";
while ($i < 10)
{
    $mas[$i] = rand(1, 100);
    echo $mas[$i], ' ';
    $i++;
}

$a = 323; $b = 423;
echo "\nМодуль разности $a и $b = ", abs($a - $b), "\n";

$mas = array(1, 2, -1, -2, 3, -3);
for($i = 0; $i < count($mas); $i++)
{
    if($mas[$i] < 0) $mas[$i] *= -1;
    echo $mas[$i], ' ';
}

$a = 30; $i = 0;
echo "\nДелители числа $a: ";
$dividers = array();
while ($i < $a)
{
    $i++;
    if($a % $i == 0)  array_push($dividers, $i);
}
foreach ($dividers as $divider) echo $divider, ' ';

$mas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$result = 0; $i = 0;
while ($result <= 10)
{
    $result += $mas[$i];
    $i++;
}
echo "\nНужно сложить $i первых элементов";

// 7
echo "\n\n15 task\n";
function printStringReturnNumber($string)
{
    echo $string;
    return 0;
}
$my_num = printStringReturnNumber("строка");
echo "\n$my_num\n";

// 8
echo "\n\n16 task\n";
function increaseEnthusiasm($string)
{
    return $string.'!';
}
echo increaseEnthusiasm("Строка"), "\n";

function  repeatThreeTimes($string)
{
    return $string.$string.$string;
}
echo repeatThreeTimes("Строка"), "\n";

echo increaseEnthusiasm(repeatThreeTimes("Строка")), "\n";

function cut($string, $count = 10)
{
    return substr($string,0, $count);
}
echo cut("String", 5), "\n";

function recursion($mas, $i)
{
    if($i < count($mas))
    {
        echo $mas[$i], ' ';
        recursion($mas, $i + 1);
    }
    else echo "\n";
}

$mas = array(2, 3, 4, 1, 4, 5, 6, 8);
recursion($mas,0);

function sum_of_number($int)
{
    $sum = 0;
    for($i=0; $i<strlen($int); ++$i) $sum += substr($int, $i,1);
    if ($sum > 9)
        sum_of_number($sum);
    else echo $sum;
    return 0;
}

$int = 14353;
sum_of_number($int);

// 9
echo "\n\n17 task\n";
function arrayFill($insert_element, $count)
{
    $mas = array($insert_element);
    for ($i = 0; $i < $count; $i++)
    {
        array_push($mas, $insert_element);
    }
    return $mas;
}
$mas = arrayFill('x', 5);
foreach ($mas as $elem) echo $elem;

$mas = array(array(1,2,3), array(4,5), array(6));
$sum = 0;
foreach ($mas as $ma)
    $sum += array_sum($ma);
echo "\n", $sum, "\n";

$insert_element = 0;
$mas = array();
for($i = 0; $i < 3; $i++) {
    array_push($mas, array());
    for ($j = 0; $j < 3; $j++)
    {
        $insert_element++;
        array_push($mas[$i], $insert_element);
    }
}
foreach ($mas as $elem) {
    echo '[';
    foreach ($elem as $item) {
        echo $item;
    }
    echo ']';
}

$mas = array(2, 5, 3, 9);
echo "\n", $result = $mas[0] * $mas[1] + $mas[2] * $mas[3], "\n";

$user = array("name" => "Ilya", "surname" => "Kazancev", "patronymic" => "Vyacheslavovich");
echo $user["surname"],' ', $user["name"],' ', $user["patronymic"], "\n";

$date = array("year" => 2023, "month" => 3, "day" => 10);
echo $date["year"],'-', $date["month"],'-', $date["day"], "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов в массиве: ", count($arr), "\n";
echo "Последний элемент: ", array_pop($arr)," Предпоследний: ", array_pop($arr);

// 10
echo "\n\n18 task\n";
function sumMore10($int1, $int2)
{
    return ($int1 + $int2 > 10);
}
function equal($int1, $int2)
{
    return ($int1 == $int2);
}
$test = 0;
echo (($test ==   0) ? "верно" : ''), "\n";

$age = 99;
if($age < 10 || $age > 99)
    echo "Число меньше 10 или больше 99", "\n";
else
{
    $sum = 0;
    for ($i = 0; $i < strlen($age); ++$i) $sum += substr($age, $i, 1);
    echo (($sum < 9) ? "Сумма цифр однозначна\n" : "Сумма цифр двузначна\n");
}

$arr = array(2, 5, 8);
if(count($arr) == 3) echo array_sum($arr), "\n";

// 11
echo "\n\n19 task\n";
for ($i = 0; $i < 20; $i++)
{
    for ($j = 0; $j < $i + 1; $j++)
    {
        echo 'x';
    }
    echo "\n";
}

// 12
echo "\n\n20 task\n";
$mas = array(2, 4, 5, 3, 4, 10);
echo "Среднее арифметическое: ", $average = array_sum($mas) / count($mas), "\n";

$mas = range(1, 100);
echo "Сумма элементов от 1 до 100: ", array_sum($mas), "\n";

$mas = array(2, 4, 5, 3, 4, 10);
$mas = array_map('sqrt', $mas);
echo "Массив с корнями: ";
foreach ($mas as $elem) echo $elem, ' ';

$alphabet = range('a', 'z');
$numbers = range(1,26);
echo "\nМассив с алфавитом:\n";
$mas = array_combine($alphabet, $numbers);
foreach ($mas as $elem) echo $elem, ' ';
echo "\n";
foreach (array_keys($mas) as $elem) echo $elem, ' ';

$string = "1234567890";
$mas = str_split($string, 2);
echo "\nСумма пар чисел: ", array_sum($mas);