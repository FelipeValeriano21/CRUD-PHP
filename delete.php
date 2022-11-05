<?php

include 'conexao.php';

// get the post records
$txtid = $_POST['idCliente'];

$sql = "DELETE from  cliente where idCliente = '$txtid' ;";
if (mysqli_query($conn, $sql)) {
      echo "Registro excluido com sucesso";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);

?>