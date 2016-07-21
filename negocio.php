<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="842" height="487" border="1" align="center">
  <tr>
    <td width="36">&nbsp;</td>
    <td width="575"><img src="banner.jpg" width="716" height="168" /></td>
    <td width="69">&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td>
      
      <div align="center">
        <?php
	/*$dato1=$_POST["dato1"];
	$dato2=$_POST["dato2"];
	$resultado=$dato1+$dato2;
	echo "el resultado es: $resultado";*/
	
	class suma
	{
		private $resultado;
		
		public function operar($dato1, $dato2,$operacion)
		{
			
			
			switch($operacion)
			{
				case  "ninguno":
					echo "No ha elegido ninguna operación a realizar";
				break;
				
				case "suma":
				$resultado = $dato1 + $dato2;
				$this->resultado=$resultado;
				$this->imprimir();
				break;
				
				case "resta":
				$resultado = $dato1 - $dato2;
				$this->resultado=$resultado;
				$this->imprimir();
				break;
				
				case "multiplicacion":
				$resultado = $dato1 * $dato2;
				$this->resultado=$resultado;
				$this->imprimir();
				break;
				
				case "multiplicacion":
				$resultado = $dato1 / $dato2;
				$this->resultado=$resultado;
				$this->imprimir();
				break;
				
				
			}
		}
		
		public function imprimir()
		{
			echo " El resultado es: "; 
			echo " $this->resultado";
		}
		
	}
	$final=new suma();
	$final->operar($_POST["dato1"],$_POST["dato2"], $_POST["operaciones"]);
	
	
	
	?>
      </div>
    
     </td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><img src="pie.jpg" width="343" height="153" /></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>