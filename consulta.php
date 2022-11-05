<?php 

include 'conexao.php';
 
$sql = mysqli_query($conn, "SELECT * FROM cliente") or die( 
    mysqli_error($conn) //caso haja um erro na consulta 
  );
   
  //pecorrendo os registros da consulta. 
  while($aux = mysqli_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />"; 
    echo "Nome:".$aux["nome"]."<br />"; 
    echo "Email:".$aux["email"]."<br />"; 
  }
   


?>