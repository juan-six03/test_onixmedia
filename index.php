<html>
	
<?php

include("controller.php");

$numeros = [
	"num1" => 10,
	"num2" => 15
];

$op = new basicOperation();
$op->suma($numeros);
$op->resta($numeros);
$op->producto($numeros);
$op->division($numeros);
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
				"La suma de los numeros es: <?php echo $suma;?>"+ "<br>"
				"La resta de los numeros es: <?php echo $resta;?>" +"<br>"
				"El producto de los numeros es: <?php echo $producto;?>" +"<br>"
				"La division de los numeros es: <?php echo $division;?>"
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

