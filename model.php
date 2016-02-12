<?php
	include ("controller.php");
	$op = new basicOperation ();

	$numeros = [
		"num1" => $_POST['num1'],
		"num2" => $_POST['num2'],
	];
	$res = array();
	try{
		switch( $_POST['typeOp'] ){
			case 1:{
				$res["data"] = $op->suma($numeros);
				break;
			}
			case 2:{
				$res["data"] = $op->resta($numeros);
				break;
			}
			case 3:{
				$res["data"] = $op->producto($numeros);
				break;
			}
			case 4:{
				$res["data"] = $op->division($numeros);
				break;
			}
			default : 
				$res["msg"] = "Tipo de operacion no soportada";
				$res["onError"] = true;
		}
	} catch (Exception $e) {
		$res["onError"] = true;
		$res["msg"] = $e->getMessage();	
	}finally{
		echo json_encode($res);
	}
?>
