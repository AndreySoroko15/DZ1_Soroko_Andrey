<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homework 1</title>
</head>
<body>
  
  <?php 
  // Задание №1
    echo '&nbsp' . '<i><b> 1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму,
    разность, произведение и частное (результат деления)</b></i>.<br>'; 
    
    function task1() 
    {
      $a = 10;
      $b = 2;
  
      $sum = $a + $b;
      $diff = $a - $b;
      $prod = $a * $b;
      $quot = $a / $b;

      return "<br> {$a} + {$b} = {$sum} <br>
              {$a} - {$b} = {$diff} <br>
              {$a} * {$b} = {$prod} <br>
              {$a} / {$b} = {$quot} <br>";
    }

    echo task1() . '<hr>';

  // Задание №2

    echo '&nbsp' . '<i><b> 2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4-2(z-2x^2+y^2). </b></i><br>';

    function task2($x, $y, $z) {
      
      $res = ($x + 1) * 4 - 2 * ($z - 2 * $z^2+$y^2);

      return "<br> ({$x} + 1) * 4 - 2 * ({$z} - 2 * {$x}^2 + {$y}^2) = {$res}";

    }

    echo task2(2, 6, 9) . '<hr>';

  //Задание №3

    echo '&nbsp' . '<b><i> 3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
    результат присвойте переменной $c. Затем создайте переменную $d,
    присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
    в переменную $result. Выведите на экран значение переменной $result.
     </i></b><br>';

    function task3() {

      $a = 17;
      $b = 10;
      $c = $a - $b;
      $d = 7;
      
      return '<br> result = ' . $result = $c + $d . "<hr>";
    }

    echo task3();

  //Задание №4

    echo "&nbsp <b><i>4. Создайте переменные \$text1 = 'Привет, ' и  \$text2 = 'Мир!'. С помощью этих
    переменных и операции сложения строк выведите на экран фразу 'Привет,
    Мир!'. </b></i><br>";

    function task4($text1, $text2) {
      echo $text1 . ', ' . $text2 . '! <br>';
      echo "{$text1}, {$text2}!";
    }

    task4('Привет', 'Мир');
    echo '<hr>';

  //Задание №5

    echo "&nbsp <b><i>5. Создайте переменную \$name и присвойте ей ваше имя. Выведите на экран
    фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
     </b></i><br>";

    function task5(){
      $name = 'Андрей';

      echo "Привет, {$name}!";
    }

    task5();

  //Задание №6
    echo '<hr>'; 

    echo "&nbsp <b><i>6. Создайте переменную \$num и присвойте ей значение '12345'. Найдите
    сумму цифр этого числа.
     </b></i><br>";

     function task6($num) {

      $res = $num[0] + $num[1] + $num[2] + $num[3] + $num[4] + $num[5];

      echo "Сумма цифр числа {$num} = {$res}";
     }

    task6('123456');

  //Задание №7
    echo '<hr>'; 

    echo "&nbsp <b><i>7. Напишите скрипт, который считает количество секунд в часе, в сутках, в
    месяце, в году и сколько прошло секунд с начала 2000 года.    </b></i><br>";

    function howManySec($from) {
      
      $oneHour = 60 * 60;
      $oneDay = $oneHour * 24;
      $oneMonth = round($oneDay * 30.4167);
      $oneYear = round($oneMonth * 12);
      $thisYear = date('Y');

      echo "В 1 году примерно {$oneYear} сек.";

      $diff = $oneYear * ($thisYear - $from); 

      echo '<br>';
      echo "С начала 2000 года прошло примерно {$diff} сек.";
    }

    howManySec(2000);

  //Задание №8
  echo '<hr>'; 

  echo "&nbsp <b><i>8. Создайте три переменные - час, минута, секунда. С их помощью выведите
  текущее время в формате 'час:минута:секунда'.
      </b></i><br>";

      function currentTime () {

        $hour = date("H");
        $min = date("i");
        $sec = date("s");

        echo "{$hour}:{$min}:{$sec}";
      }

      currentTime();


  //Задание №9
  echo '<hr>'; 
  echo "&nbsp <b><i>9. Переделайте приведенный код так, чтобы в нем использовались операции
  +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.
  <br> Код для переделки: <br></b>
  \$var = 1; <br>
  \$var = \$var + 12; <br>
  \$var = \$var - 14; <br>
  \$var = \$var * 5; <br>
  \$var = \$var / 7; <br>
  \$var = \$var + 1; <br>
  \$var = \$var - 1; <br>
  echo \$var; <br>
  </i><br>";

  function task9() {
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo 'var = ' . $var;
  }

  task9();
  
  //Задание №8
  echo '<hr>'; 

  echo "&nbsp <b><i>10. Создайте константу и присвойте ей значение - ваша фамилия, создайте
  соответствующие переменные со сл. значениями: ваше имя, ваше отчество,
  ваш возраст. Проверьте существует ли созданная константа, если да, то
  выведите фразу \"Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр. ваше отчество). Мне <ваш возраст> лет\". Каждая фраза должна начинаться с новой строки. 
  <br> &nbsp Например:
  <br>\"Меня зовут Иванов (И. И.).
  Мне 5 лет.\"
      </b></i><br>";

  function task10() {
    define('SURNAME', 'Сороко');
    $name = 'Андрей';
    $patr = 'Николаевич';
    $age = 23;

    if(defined('SURNAME')) {
      echo "Меня зовут " . SURNAME . ' (' . mb_substr($name, 0, 1) . '. ' . mb_substr($patr, 0, 1) . '.). ' . "Мне {$age} года" ;
      
    }

  }
  
  task10();
  ?>

</body>
</html>