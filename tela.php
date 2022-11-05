<?php 

include 'conexao.php';

?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tela</title>
  </head>
  <body class=" col-11 m-auto">
  

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">telefone</th>
            <th scope="col">Endereço</th>
          </tr>
        </thead>
      <tbody>
      <?php 
      
      $sql = mysqli_query($conn, "SELECT * FROM cliente") or die( 
        mysqli_error($conn) //caso haja um erro na consulta 
      );

      while ($dados = mysqli_fetch_assoc($sql)){
        $idCliente = $dados['idCliente'];
        $nome = $dados['nome']; 
        $email = $dados['email'];
        $telefone = $dados['telefone'];
         $endereco = $dados['endereco'];?>
       <tr>
           
            <td><?php echo $idCliente ?></td>
            <td><?php echo $nome ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $telefone ?></td>
            <td><?php echo $endereco ?></td>

      
          </tr> 
       <?php } ?>
       </tbody>
      </table>

     <Label>Busque os registros</label>  <input>

        </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>