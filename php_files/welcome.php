<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas-vindas</title>
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
        .info-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
        }
        .start-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffcc00;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-size: 20px;
        }
        .start-button:hover {
            background-color: #ffdb4d;
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
        <h1>Página de Boas-vindas</h1>
    </header>
    <div class="container">
        <a href="iniciar.php" class="start-button">Iniciar</a>
        <?php echo "<h1>Seja bem-vindo a essa página!</h1>"; ?>
        <div class="info-container">
            <h2>O que é o carrinho anti fogo?</h2>
            <p>O carrinho anti fogo é um dispositivo utilizado em ambientes industriais para prevenir e combater incêndios de forma rápida e eficiente. Ele é equipado com diversos recursos, como extintores, mangueiras e equipamentos de proteção, e é projetado para ser facilmente acessível em caso de emergência.</p>
            <p>Além disso, o carrinho anti fogo é frequentemente utilizado em treinamentos de segurança para instruir os funcionários sobre como agir em situações de incêndio e garantir a segurança de todos no local de trabalho.</p>
        </div>
    </div>
</body>
</html>