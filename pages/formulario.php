<!doctype html>

<html>

<head>

    <meta charset="UTF-8">

    <title> Formulário HTML </title>

    <style>

    </style>

    <link rel="stylesheet" href="../css/style_formulario.css">
</head>

<body>
    <div class="div_fundo">

        <div class="div_transparencia">

            <div class='formulario'>

                <form action="enviar.php" method="post">

                    <h4>Formulario de mensagem</h4>

                    <label for="nome">Nome:</label>

                    <input type="text" name="nome" id="nome" required> <br>

                    <label for="idade">Idade:</label>

                    <input type="number" name="idade" id="idade" required> <br>

                    <label for="site">Site: </label>

                    <input type="url" name="site" id="site" required> <br>

                    <label for="email">Email: </label>

                    <input type="email" name="email" id="email" required> <br>

                    <label for="mensagem">Mensagem: </label>

                    <textarea name="mensagem" id="mensagem" required></textarea> <br> <br>

                    <input type="submit" value="Enviar">

                </form>

            </div>

        </div>
        
    </div>


</body>

</html>