<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php
  
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST")  {

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  ?>

<h2>Exemplo de validação de formulário PHP</h2>

<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
Nome: <input type="text" name= "email">
<br><br>

E-mail: <input type="text" name="email">
<br><br>

Website: <input type="text" name=website>
<br><br>

Comentario: <textarea name="commnet" row="5" cols="40">

</textarea>
<br><br>

Genero:
  <input type="radio" name="gender" value="Mulher">Mulher
  <input type="radio" name="gender" value="Homem">Homem
  <input type="radio" name="gender" value="Outro">Outro
  <br><br>
  <input type="submit" name="submit" value="Validar">

</form>

<?php
    echo "<h2>Validar o formulario</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

?>


</body>
</html>