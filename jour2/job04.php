<?php

for ($i=1; $i<=100; $i++){

    if ($i%3==0){ // %3 = multiple de 3
        echo"Fizz<br/>";

    }elseif($i%5==0){ //%5 = multiple de 5
        echo"Buzz<br/>";

    }elseif($i%3 && $i%5){
        echo"FizzBuzz<br/>";

    }else{
        echo"$i<br/>";
    }

    }
   

?>