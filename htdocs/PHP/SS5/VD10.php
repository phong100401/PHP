<?php
function sum(){
    static  $var1 =9;
    $var2 = $var1 + 12;

    echo  "The value of the variable is : $var1<br>";
    echo  "The addtion value of 9 + 12 = ";
    echo  "$var2<Br>";
}
sum();
?>
