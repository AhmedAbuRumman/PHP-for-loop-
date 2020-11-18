<table border="1" cellpadding="3" cellspacing="0">

<?php

for ($i=1 ; $i <11 ; $i++) {
 if ($i == 10) {
     echo $i;
 }
 else{
     echo $i."-";
 }
 }
 echo "<hr>";

  //   1   //

 
 $sum=0;
 for ($i=0 ; $i < 30 ; $i++){
     $sum+=$i;
 }
 echo $sum;
 echo "<hr>";

//   2   //

$const_char = 'A';
$var_char = 'A';
$x = 1 ;
for( $i = 5 ; $i > 0 ; $i-- ){
    for($j = $i-1 ; $j > 0 ; $j--){
       
        echo $const_char." ";  
        
    }
    echo str_repeat($var_char.'&nbsp;',$x++);
        
    $var_char++;
    echo "<br/>";
   
}
echo "<hr>";

//   3c    //

$num=1;
$n=1;
for($i=5; $i > 0; $i--){

    for($j=$i-1;$j >0;$j--){
        echo "1"." ";
    }
    echo str_repeat($num.'&nbsp;',$n++);
    $num++;
    echo "<br/>";
}
echo "<hr>";

//   3b    //

for ($i=1; $i<=5; $i++)
{
    for($j=1;$j<=5;$j++){
        if($i==$j){
        echo $j." ";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br/>";
 
}
echo "<hr>";

//   4    //


$num = 5;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "$factorial";  

echo "<hr>";

//   5    //


$x = 0;    
$y = 1; 

for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z.",";         
    $x=$y;       
    $y=$z;     
}   
echo "<hr>";

//   6    //
$i="OrangeAcademy";
$z="c";
$count="0";
for($x="0"; $x< strlen($i); $x++){

    if(substr($i,$x,1)==$z)
    {
    $count=$count+1;
     }
    }
    echo $count;
    echo "<hr>";

//   7    //



for($i=1;$i<=6;$i++)
{
echo "<tr>";
for($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  
  }

 


  //   8    //


?>
  </table>
