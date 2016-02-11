<html>
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
</html>

