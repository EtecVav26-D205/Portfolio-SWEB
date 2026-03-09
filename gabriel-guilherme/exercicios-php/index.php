
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Soma com PHP (GET)</title>
</head>
<body>

  <h1>Verificar número entre 100 e 200</h1>

  <form method="get">
    <label>Informe um número: </label>
    <input type="number" name="n1" step="any" required>
    <br><br>
  <?php 
  $n1 = $_GET["n1"];
  if($n1 >= 100 && $n1 <= 200){
    echo "O número $n1 está entre 100 e 200";
  }else{
    echo "O número $n1 não está entre 100 e 200";
  }
  ?>
  <br><br>
    <input type="submit" value="Calcular soma">
    
  </form>

</body>
</html>