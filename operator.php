
<?php



for($i=1; $i<=10; $i++)
   if($i==1 ){
       echo "$i";}
   
   else{
       echo "-$i";
   }

    echo "<hr>";


    $n=0;
    for($i=1; $i<=30; $i++){
       $n=$n + $i ;
       
    }
    echo $n;

    echo "<hr>";

    $n=1;
    for($i=1; $i<=5; $i++){
       $n=$n * $i ;
       
    }
    echo $n;
    echo "<hr>";


    // $n=1;
    // for($i=0; $i<=13; $i++){
    //    $n=$n+($i-1);
    //    echo $n;
    // }

   
    // $count=0;
    $string = "OrangeAcademy";
    $findme   = 'c';
    $pos = strpos($string, $findme);
    if ($pos === false) {
        echo "The string '$findme' was not found in the string '$string'";
    } else {
        // $count=$count+1;
        echo 1;
    }
    echo "<hr>";
   
         $rows = 5;
        $x=1;
        for ($i=1; $i<=6; $i++) {
           
            for ($j = 1; $j< $i; $j++) {
               echo $x++ . "<br> ";
            }    
           
        }