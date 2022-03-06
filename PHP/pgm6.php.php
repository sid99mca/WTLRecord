<?php  
echo "Pattern1";
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo "* ";  
}  
echo "<br>";  
} 
echo "Pattern2";
echo "<br><br>";
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "* ";  
}  
echo "<br>";  
}  
echo "Pattern3<br>";
for ($i=1; $i<=5; $i++)  
{  
 for ($j=1; $j<=5; $j++)  
  {  
   echo '* ';  
  }  
   echo "</br>";  
}   
?>