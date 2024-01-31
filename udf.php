<html>
<body>
   <form>
   enter number1:<input type="number" name="num1"><br>
   enter number2:<input type="number" name="num2"><br>
   <input type="submit">
   </form>
   </body>
   

</html>
<?php


$val1=$_REQUEST['num1'];
$val2=$_REQUEST['num2'];

 function multiplication_b2($val1,$val2)
 {
	 return $val1*$val2;
 }
  function substraction_b2($val1,$val2)
 {
	 return $val1*$val2;
 }
  function addition_b2($val1,$val2)
 {
	 return $val1*$val2;
 }
  
 
 $mul=multiplication_b2($val1,$val2);
  echo $mul;
  
  $sub=substraction_b2($val1,$val2);
  echo $sub;
  
  $add=addition_b2($val1,$val2);
  echo $add;
  
?>