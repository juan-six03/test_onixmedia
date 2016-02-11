<?php
class basicOperation {

        public function __constructor(){

        }

        public function suma($array_numbers){
                $res = 0;
                foreach($array_numbers as $ele){
                	if(is_numeric($ele)){
                        $res += $ele;
					}else{
						throw Exception("Imposible realizar suma, {$ele} no es un numero.");
					}
                }
                echo "La suma de los numeros introducidos, es: {$res}";
        }
        public function resta($array_numbers){
        	 foreach($array_numbers as $ele){
                	if(!is_numeric($ele)){
						throw Exception("Imposible realizar resta, {$ele} no es un numero.");
					}
             }
             $res = $array_numbers["num1"] - $array_numbers["num2"];
        	echo "La resta de los numeros introducidos es: {$res}";
		}
        public function producto($array_numbers){
        	foreach($array_numbers as $ele){
                	if(!is_numeric($ele)){
						throw Exception("Imposible realizar multiplicacion, {$ele} no es un numero.");
					}
             }
             $res =  $array_numbers["num1"] * $array_numbers["num2"];
        	echo "La resta de los numeros introducidos es: {$res}";
		}
        public function division($array_numbers){
        		$res = 0;
        	foreach($array_numbers as $ele){
                	if(!is_numeric($ele)){
				throw Exception("Imposible realizar division, {$ele} no es un numero.");
			}
             	}
			
		try{
				$res = $array_numbers["num1"] / $array_numbers["num2"];
        	}catch(Exception $e){
        		echo "No es posible realizar division entre 0";
        	}
        	echo "La division de los numeros introducidos es:{$res}";
	}

}

?>
