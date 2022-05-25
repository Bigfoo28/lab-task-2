<?php


function addition(float $result,float $nums): float
{
return $result+$nums;
 }
 function difference(float $result,float $nums): float
{
return $result-$nums;
 }
 function multiplucation(float $result,float $nums): float
{
return $result*$nums;
 }
 function division(float $result,float $nums): float
{
return $result/$nums;
 }




function convert ( string $userformula , float $result  ): void 
{

 preg_match_all('!\d+!', $userformula, $nums);
preg_match_all('!\D+!', $userformula, $operators);

$operators = $operators[0];
$nums = $nums[0];

$result = 0;
foreach ($operators as $key => $operator) {
    if ($key === 0) {
        $result = $nums[$key];
    }

    switch ($operator) {
        case '+':
           addition ($result,$nums[$key + 1]);
            break;
        case '-':
            difference( $result,$nums[$key + 1]);
            break;
        case '*':
            if ($result == 0) {
                $result = 1;
            }
            multiplucation($result, $nums[$key + 1]);
            break;
        case '/':
            if ($result == 0) {
                $result = 1;
            }
            division($result,$nums[$key + 1]);
            break;

    }
}

}
echo convert ('2+6*2', 0);


//echo $result;