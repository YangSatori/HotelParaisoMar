<h1>
   Hotel Paraíso Mar 🌊
   <?php
      if (isset($_POST["Valores"])){
         header("location: chamando.php");
      }
   ?>
</h1>


<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Projeto de Ambientes Operacionais</title>
   </head>
   <body>
      <h1>
         Hotel Paraíso Mar 🌊
         <?php
            if (isset($_POST["Valores"])){
               header("location: chamando.php");
            }
         ?>
      </h1>
      <form method="post">
         <input type="submit" value="Consultar valores" name="Valores">
      </form>
      <p>Preços perfeitamente acessíveis para um hotel à beira-mar! Consulte já os valores de sua estádia!</p>
   </body>
</html>

