<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#form1 table tr td #button {
	text-align: center;
}
</style>
</head>

<body> 
      <table width="842" height="487" border="1" align="center">
  <tr>
    <td width="36">&nbsp;</td>
    <td width="575"><img src="banner.jpg" width="716" height="168" /></td>
    <td width="69">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form id="form1" name="form1" method="post" action="negocio.php">
      <table width="712" height="125" border="1">
        <tr>
          <td width="347"><div align="right">Digite dato 1:</div></td>
          <td width="349"><label for="dato1"></label>
            <input type="text" name="dato1" id="dato1" /></td>
          </tr>
        <tr>
          <td><div align="right">Digite dato 2:</div></td>
          <td><input type="text" name="dato2" id="dato2" /></td>
          </tr>
        <tr>
          <td colspan="2"> <p align="center">
           
            <select name="operaciones" id="operaciones">
              <option value="ninguna">Seleccione Operación:</option>
              <option value="suma">Suma</option>
              <option value="resta">Resta</option>
              <option value="multiplicacion">Multiplicación</option>
              <option value="division">División</option>
            </select>
          </p></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="button" id="button" value="Enviar" />
          </div></td>
        </tr>
      </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><img src="pie.jpg" width="343" height="153" /></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>