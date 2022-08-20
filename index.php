<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula050822</title>
</head>
<body>
    
    <!-- para onde enviar os arquivos  -->
    
<form action="receber-dados.php" method="POST">
  <label>Nome:</label>
  <input type="text" name="nome">
  <p></p>
  <label>E-mail</label>
  <input type="text" name="email">
  <p></p>
  <label >Nota 1</label>
  <input type="text" name="nota1">
   <p></p>

  <label >Nota 2</label>
  <input type="text" name="nota2">
   <p></p>

  <label >Nota 3</label>
  <input type="text" name="nota3">
   <p></p>
   <button type="submit">enviar</button>

  </form>

</body>
</html>