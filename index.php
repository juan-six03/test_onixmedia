<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Operaciones fundamentales</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<script src="jquery-1.12.0.min.js"></script>
		<script>
			function onErrorShow(msg){
				$("#div_res").text(msg);
			}
			function getRes(){
				/*limpiar div res*/
				$("#div_res").text("");

				num1 = $("#txt_num1").val();
				num2 = $("#txt_num2").val();
				num1 = (num1 === '' ? 0 : num1);
				num2 = (num2 === '' ? 0 : num2);
				$.ajax({ 
					url: 'model.php',
					data: {
						"num1": num1,
						"num2": num2,
						"typeOp": $("#sel_typeOp").val()
					},
					type: 'post',
					success: function(output) {    
						var res = JSON.parse(output);
						if(res.onError){
							onErrorShow(res.msg);
							return;
						}
						$("#div_res").text( res.data);
					}
				});


			}
		</script>
	</head>
	<body>

		<div class="container">

			<h2>Operaciones fundamentales Onix Media</h2>
	
			<label for="txt_num1"> numero 1: </label>
			<input type="number" id="txt_num1" />
			<br>
			<label for="txt_num2"> numero 2: </label>
			<input type="number" id="txt_num2" />
			<br>
			<label>
				Tipo de operacion a realizar: 
			</label>
			<select id="sel_typeOp">
				<option value=1>Suma</option>
				<option value=2>Resta</option>
				<option value=3>Producto</option>
				<option value=4>Division</option>

			</select>
			<br>
			<button class="btn btn-primary btn-lg" type="submit" onclick="getRes()" data-toggle="modal"  data-target="#modal_resultado">Obtener resultado</button>
		</div>

		<div id="modal_resultado" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<div id="div_res" class="modal-body">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
				</div>
				</div>
		</div>
	</body>
</html>

