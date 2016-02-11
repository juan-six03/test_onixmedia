
<html>
<head>
<script src="jquery-1.12.0.min.js"></script>
	<script>
	var operaciones_fundamentales = {
		"suma" : 1,
		"resta": 2,
		"multiplicacion": 3,
		"division": 4
	}
	function onErrorShow(msg){
		console.log(msg);
	}
	function getRes(){
	debugger;
		/*limpiar div res*/
		$("#div_res").text("");

		num1 = $("#txt_num1").val();
		num2 = $("#txt_num1").val();
		$.ajax({ 
			url: 'model.php',
			data: {
				"num1": $("#txt_num1").val(),
				"num2": $("#txt_num2").val(),
				"typeOp": $("#sel_typeOp").val()
			},
			type: 'post',
			success: function(output) {    
				debugger;
				var res = JSON.parse(output);
				if(res.onError){
					onErrorShow(res.msg);
					return;
				}
				$("#div_res").text( res.data);
			}
		});
		
		
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

	<select id="sel_typeOp">
		<option value=1>Suma</option>
		<option value=2>Resta</option>
		<option value=3>Producto</option>
		<option value=4>Division</option>

	</select>

	<button onclick="getRes()">Click me</button>

	<div id="div_res">

	</div>


	<button onclick="myFunction()">Try it</button>


</body>
</html>

