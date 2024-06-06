<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        body {
            background: url('Desing%20sem%20nome(1).png') no-repeat center center fixed;
            background-size: cover;
            color: black;
            font-family: Arial, sans-serif;
            margin: 0;
            overflow-x: hidden;
        }
        header {
            background-color: rgba(255, 0, 0, 0.7);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .container {
            text-align: center;
            padding: 50px;
            position: relative;
            z-index: 2;
        }
        a {
            color: black;
            text-decoration: none;
            font-size: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
        .diagonal-stripe {
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 48%, yellow 48%, yellow 52%, transparent 52%);
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="diagonal-stripe"></div>
    <header>
        <h1>Bem-vindo ao nosso site!</h1>
    </header>
    <div class="container">
        <p>Clique no link abaixo para acessar a página de boas-vindas:</p>
        <a href="welcome.php">Página de boas-vindas</a>
    </div>
</body>
</html>