<?php

class basicOperation {

	public function __constructor(){
	
	}

	public function suma($array_numbers){
		$res = 0;
		foreach($array_numbers as $ele){
			$res += $ele;
		}
		return $res;
	}
	public function resta($array_numbers){
                //$res = 0;
                //foreach($array_numbers as $ele){
                //        $res -= $ele;
                //}
                return $array_numbers["num1"] - $array_numbers["num2"];
        }	        
	public function producto($array_numbers){
//                $res = 0;
//                foreach($array_numbers as $ele){
//                        $res *= $ele;
//                }
                return $array_numbers["num1"] * $array_numbers["num2"];
        }
	public function division($array_numbers){
                //$res = 0;
                //foreach($array_numbers as $ele){
                //        $res /= $ele;
                //}
                return $array_numbers["num1"] / $array_numbers["num2"];
        }
                
}
$numeros = [
"num1" => 10,
"num2" => 15
];

$op = new basicOperation();
$suma = $op->suma($numeros);
$resta = $op->resta($numeros);
$producto = $op->producto($numeros);
$division = $op->division($numeros);

?>
