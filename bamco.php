<?php
$servidor = "localhost";
$base = "dbinb0243";
$usuario = "inb0243user";
$senha = "alunos";
try{
$conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<center><h1>Conectado do Servidor Web com Sucesso a base: </h1>" .$base;
echo "<br><h2><font color=red>9124_Leticia</font></h2><br>";

}catch(PDOException $e) {
echo "Falha na conexão:".$e->getMessage();
}
?>
