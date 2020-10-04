<?php


if (isset($_POST["quantity"])){
    for($i=0;$i<=$_POST["quantity"];$i++){
    $array[$i]=$i;
    };

//    sort($array, SORT_STRING );

for ($j = 0; $j < count($array) + 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
            if (strcmp($array[$i],$array[$i + 1]) == 1){
            $tmp_var = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmp_var;
            var_dump($array);
            echo"<br>";
        };
    };
};




 var_dump($array);

    $result = (array_search($_POST["number"], $array));

    echo ("Позиция числа {$_POST["number"]} - $result ая");
}else{
    echo "Введите число";
};

?>


<form method="post">
<input type="text" name="quantity" placeholder="Количество чисел (n)" ><br>
<input type="text" name="number" placeholder="Искомое число (k)"><br>
<input type="submit" value="Отправить">
</form>