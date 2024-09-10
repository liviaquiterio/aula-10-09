<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Componentes - PHP com MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-white bg-danger">Pesquisa de Componentes - PHP com MySQL</h3>
        <section><p class="text-center"><img src="imagens/como-criar-um-sistema-de-cadastro-com-PHP-e-MySQL-380x249.png" 
        alt="Cadastro com PHP/MYSQL"></p>
        <?php
        require "conexao.php";
        $sql="SELECT * FROM tbcomponente ORDER BY componente";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Código</th>";
                echo "<th>Componente</th>";
                echo "<th>Curso</th>";
                echo "<th>Editar</th>";
            echo "</tr>";

        while($linha=mysqli_fetch_array($resultado))
        {
            $codigo = $linha["codigo"];
            $curso = $linha["curso"];
            $componente = $linha["componente"];
        }
        echo "</table>"
        ?>
    </section>

    </div>
</body>
</html>