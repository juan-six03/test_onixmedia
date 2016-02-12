<html>
<head>
		<title>Consulta CURP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<script src="jquery-1.12.0.min.js"></script>
		<script>
		$(document).ready(function(){

			function CURP(pat, mat, nombre, nacimiento){

				this.paterno = pat;
				this.materno = mat;
				this.nombre = nombre;
				this.nacimiento = nacimiento;

				this.obtenerCURP = function(){
					var a = this.paterno[0] || '';
					var b = this.getPrimeraVocal(this.paterno) || '';
					var c = this.materno[0] || '';
					var d = this.getLetraNombre() || '';
					var curp = a+b+c+d;
					if(curp == "VACA" || curp == "COLA"){
						var idx = this.getIndexFirstVowel(curp);
						curp[idx] = 'X';
					}
					curp = curp.replace(/ñ/g, "x");
					curp = curp + (this.getFechaNacimientoForma() || '');
					return curp.toLocaleUpperCase();
				}

				this.getFechaNacimientoForma = function(){
					var array_date = null;
					var val = "";
					if(nacimiento.match(/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/) != null){
						//fecha valida
						array_date = nacimiento.split('/');
						val = this.addZero(array_date[0]) + this.addZero(array_date[1]) + array_date[2].substr(2);
					}
					return val;
				}

				this.getLetraNombre = function(){
					return (nombre.toLocaleLowerCase() == "jose" || nombre.toLocaleLowerCase() == "maria")
					? nombre.charAt(1) : nombre.charAt(0);
				}
				
				this.getPrimeraVocal = function(str){
					var idx = this.getIndexFirstVowel(str);
					return (idx != null ? str.charAt(idx): null);
				}

				this.getIndexFirstVowel = function(str){
					str = str.toLocaleLowerCase();
					for(i = 0; i < str.length; i++){
						if(['a', 'e', 'i', 'o', 'u'].indexOf(str.charAt(i)) != -1){
							return i;
						}
					}
					return null;
				}
				this.addZero = function(val){
					return (val.length == 2) ? val : ("0"+val);
				}
				
			}

			function build_CURP(){
				var paterno = $("#txt_pat").val();
				var materno = $("#txt_mat").val();
				var nombre = $("#txt_nombre").val();
				var fecha_nacimiento = $("#txt_nacimiento").val();
				
				var mi_curp = new CURP(paterno, materno, nombre, fecha_nacimiento);
				return (mi_curp.obtenerCURP());
			}
			
			$( "input[type='text']" ).keypress(function() {
				$("#txt_curp").val(build_CURP());
			});
			$("input[type='text']").change(function(a,bc){
				$("#txt_curp").val(build_CURP());
			});
		});
			
			
		</script>
<title>CURP</title>
</head>

		<div class="container">

			<h2>Generador de CURP</h2>
			<label for="txt_pat"> Apellido Paterno: </label>
			<input type="text" id="txt_pat" />
			<br>
			<label for="txt_mat"> Apellido Materno: </label>
			<input type="text" id="txt_mat" />
			<br><label for="txt_nombre"> Nombre: </label>
			<input type="text" id="txt_nombre" />
			<br>
			<label for="txt_nacimiento" > Fecha de nacimiento: </label>
			<input type="text" id="txt_nacimiento" placeholder="dd/mm/yyyy"/>
			<br>
			
			<br>
			<label for="txt_curp">
				CURP: 
			</label>
			<input type="text"  id ="txt_curp" readonly />
		</div>

</html>
