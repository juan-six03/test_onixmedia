<html>
	
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
                return $array_numbers["num1"] - $array_numbers["num2"];
        }
        public function producto($array_numbers){
                return $array_numbers["num1"] * $array_numbers["num2"];
        }
        public function division($array_numbers){
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

<script type="text/javascript">
	function getRes(){
		num1 = $("#txt_num1").val();
		num2 = $("#txt_num2").val();
		
		$.ajax({
			url: '',
			data: {"num1": num1, "num2": num2}
		}).done(function(res){
			$("#div_res").append(
			
			);
		})
	}
</script>
<body>
	<label>
		numero 1:
	</label>
	<input type="text" id="txt_num1"/>
	<label>
		numero 2:
	</label>
	
	<input type="text" id="txt_num2"/>
	
	<select id="sel1">
		
	</select>
	
	<input type="button" id="btn_res" />
	
	<div id="div_res">
		
	</div>
</body>
</html>

