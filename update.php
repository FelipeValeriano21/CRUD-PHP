
<?php

include 'conexao.php';

// get the post records
$txtid = $_POST['idCliente'];
$txtnome = $_POST['nome'];
$txtemail = $_POST['email'];
$txttelefone = $_POST['telefone'];
$txtendereco = $_POST['endereco'];

$sql = "UPDATE cliente Set  nome = '$txtnome', email = '$txtemail', telefone = '$txttelefone', endereco = '$txtendereco' where idCliente = '$txtid' ;";
if (mysqli_query($conn, $sql)) {
      echo "Registro editado com sucesso";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);

?>