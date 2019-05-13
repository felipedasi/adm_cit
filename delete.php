<meta http-equiv="refresh" content="0;URL=index.php">

<?php
require 'conexao.php';
$id=$_GET['id'];



//insere no banco
// sql to delete a record
$sql = "DELETE FROM itens WHERE id=$id";

if ($conm->query($sql) === TRUE) {
   
} else {
   echo "Registrado!";
}






?>
