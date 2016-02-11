<?php 
	include ("controller.php");
	$op = new basicOperation ();
?>

<html>


<head>
<script src="jquery-1.12.0.min.js"></script>
	<script>
	function getRes(){
	
		num1 = $("#txt_num1").val();
		num2 = $("#txt_num1").val();
		<?php

			$numeros = [ 
						"num1" => 10,
						"num2" => 15 
			];

			$op->suma ( $numeros );
			$op->resta ( $numeros );
			$op->producto ( $numeros );
			$op->division ( $numeros );
		?>
		$("#div_res").text( <?php echo "'text'"; ?> );
		
	}
function myFunction() {
    alert("Hello! I am an alert box!");
}
</script>
</head>
<body>
	<label> numero 1: </label>
	<input type="text" id="txt_num1" />
	<label> numero 2: </label>

	<input type="text" id="txt_num2" />

	<select id="sel1">

	</select>

	<button onclick="getRes()">Click me</button>

	<div id="div_res">
		

	</div>


	<button onclick="myFunction()">Try it</button>


</body>
</html>

