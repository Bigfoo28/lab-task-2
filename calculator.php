<?php
function addition(float $num1,float $num2): float
{
return $num1+$num2;
 }
 function difference(float $num1,float $num2): float
{
return $num1-$num2;
 }
 function multiplucation(float $num1,float $num2): float
{
return $num1*$num2;
 }
 function division(float $num1,float $num2): float
{
return $num1/$num2;
 }

 echo addition(10,2), "<br/>" ;
 echo difference(10,2), "<br/>" ;
 echo multiplucation(10,2), "<br/>" ;
 echo division(10,2) ,"<br/>" ;
 function calculator (float $num1,string $opperator,float $num2):float
 { 
     if(!( $opperator=='+'or $opperator=='-'or $opperator=='*'or $opperator=='/')){
         return 0 ;
     }
     switch($opperator){
         case '+':return addition($num1,$num2);
         case '-':return difference($num1,$num2);
         case '*':return multiplucation($num1,$num2);
         case '/':return division($num1,$num2);
     }
 }
 echo calculator(1,'+',2), "<br/>" ;
 echo calculator(1,'-',2), "<br/>" ;
 echo calculator(1,'*',2), "<br/>" ;
 echo calculator(1,'/',2), "<br/>" ;
 function calculatorv2 (float $num1,string $opperator,float $num2):float
 { 
     if(!in_array($opperator, ['+','-','*','/'])){
         return 0 ;
     }
     $function_name=[
         '+'=>'addition',
         '-'=>'difference',
         '*'=>'multiplucation',
         '/'=>'division',
     ];
     return $function_name [$opperator]($num1,$num2); 
    }

 echo calculatorv2(1,'+',2);echo('addition+') , "<br/>" ;
 echo calculatorv2(1,'-',2);echo('difference -'), "<br/>" ;
 echo calculatorv2(1,'*',2);echo('multiplucation* '), "<br/>" ;
 echo calculatorv2(1,'/',2);echo('division/'), "<br/>" ;
 