<?PHP

$host = "db561862575.db.1and1.com"; 	//TU HOST//
$dbuser = "dbo561862575";	 	//TU USUARIO DEL HOST//
$dbpwd = "35440019News";	//TU CONTRASEÑA//
$db = "db561862575";		//TU BASE DE DATOS//

$connect = mysql_connect ($host, $dbuser, $dbpwd);
if(!connect)
echo ("No se pudo conectar a la base de datos");
else
$select = mysql_select_db($db);

?>