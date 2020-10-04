<form method="post">
<input type="text" name="FatalErrors" placeholder="Кол-во фатальных ошибок (N)" ><br>
<input type="text" name="Warnings" placeholder="Кол-во ворнингов (M)"><br>
<input type="submit" value="Отправить">
</form>


<?php

$FatalErrors = $_POST["FatalErrors"];
$Warnings = $_POST["Warnings"];

if($FatalErrors < 0){
    echo "Число фатальных ошибко не может быть меньше нуля";
    exit;
}else{
    
};

if( $Warnings < 0 || $Warnings >= 1000){
    echo "Число ворнингов не может быть больше 999 и меньше нуля";
    exit;
}else{
    
};

$i = 0;


if($Warnings%2 !== 0 && $Warnings !== 0) {

    $Warnings+=1;
    $i++;
    
};

if ($Warnings != 0) {
    if ((($Warnings / 2) + $FatalErrors)%2 !== 0){

        $Warnings +=2;
        $i +=2;
    
    };
};



while ($Warnings > 0) {

            if ($Warnings == 0 && $FatalErrors == 1) {
                $i = -1;
                echo($i);
                exit;
            };

            $Warnings -= 2;
            $FatalErrors += 1;
            $i++;


};

while ($FatalErrors > 0) {



            if ($Warnings == 0 && $FatalErrors == 1) {
                $i = -1;
                echo($i);
                exit;
            };


            $FatalErrors -= 2;
            $i++;

};

    echo $i;

?>
