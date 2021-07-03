<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h2{
            color: aqua;
        }
    </style>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "nome não inserido" ;
    $idade = isset($_GET["idade"]) ? $_GET["idade"] : "idade não inserida";
    $sexo = $_GET["sexo"];
    ?>
    <?php
    echo "nome: $nome tem $idade e é $sexo <br/>";
    ?>
<br/>
<a href="formulario.html">Voltar</a>
</body>
</html>
