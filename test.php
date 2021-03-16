<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Выявление вкусов потребителей</h1>
    <p>Здравствуйте, потратьте, пожалуйста, несколько минут своего времени на заполнение следующей анкеты.
   <form action="?" method="post">
    <h2>Оцените, пожалуйства, приведенные аспекты в отношении к выбору сырков творожных торговой марки "Ми-Шу!" по важности:</h2>
    <table>
    <tr>
        <th>Оценка/Баллы</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
</tr>
<tr>
    <td>1.Качество</td>
   <td><input type="radio" name="N1" value="1"></td>
   <td><input type="radio" name="N1" value="2"></td>
   <td><input type="radio" name="N1" value="3"></td>
   <td><input type="radio" name="N1" value="4"></td>
   <td><input type="radio" name="N1" value="5"></td>
   </tr>
   <tr>
<td>2.Цена</td>
<td><input type="radio" name="N2" value="1"></td>
<td><input type="radio" name="N2" value="2"></td>
<td><input type="radio" name="N2" value="3"></td>
<td><input type="radio" name="N2" value="4"></td>
<td><input type="radio" name="N2" value="5"></td>
</tr>
<tr>
<td>3.Бренд</td>
<td><input type="radio" name="N3" value="1"></td>
<td><input type="radio" name="N3" value="2"></td>
<td><input type="radio" name="N3" value="3"></td>
<td><input type="radio" name="N3" value="4"></td>
<td><input type="radio" name="N3" value="5"></td>
</tr>
<tr>
<td>4.Известность</td>
<td><input type="radio" name="N4" value="1"></td>
<td><input type="radio" name="N4" value="2"></td>
<td><input type="radio" name="N4" value="3"></td>
<td><input type="radio" name="N4" value="4"></td>
<td><input type="radio" name="N4" value="5"></td>
</tr>
</table>
<br>
<input type="submt" value="Оценить">
   </form>
   <?php

// $fileName="opros_1.txt";
//    $result1 = $_POST["N1"];

//    $count1 = explode(PHP_EOL, file_get_contents($fileName));

//    $count[$result]++;
//    file_put_contents($fileName, implode(PHP_EOL, $count));

//    $sumN=array_sum($count);
$result1=$_POST["N1"];
$result2=$_POST["N2"];
$result3=$_POST["N3"];
$result4=$_POST["N4"];
// $count1[$result1]++;
// $count2[$result2]++;
// $count3[$result3]++;
// $count4[$result4]++;

// $summball1=array_sum($result1);
//    $summball2=array_sum($count2);
//    $summball3=array_sum($count3);
//    $summball4=array_sum($count4);
//    ?>

//     <div class=meny>
//         <?php
//         echo "<h1>Качество: $summball1</h1>";
//         echo "<h2>Цена:" .$summball2. "баллов</h2>";
//         echo "<h2>Бренд: " . $summball3. "баллов</h2>";
//         echo "<h2>Известность: ". $summball4. "баллов</h2>";
    
        ?>
    </div>
</body>
</html>