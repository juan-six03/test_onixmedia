

<html>
	

<head>
	<script src="jquery-1.12.0.min.js"></script>
</head>
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
	
	<button onclick="getRes()">Click me</button>

	<div id="div_res">
		
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
	</div>
	
	
	<button onclick="myFunction()">Try it</button>

<script>
function getRes(){
		num1 = document.getElementById("txt_num1").value;
		num2 = document.getElementById("txt_num1").value;
		alert(num1);
		document.getElementById("div_res").innerHTML = "
			<?php
	echo "text";?>
		";
		
	}
function myFunction() {
    alert("Hello! I am an alert box!");
}
</script>
</body>
</html>

