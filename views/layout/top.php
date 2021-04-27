<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="pizzaria, pizza, delivery">
    <meta name="description" content="Página principal">
    <meta name="author" content="Alisson Luan de Lima Peloso">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico"/>
    <title>Pally | Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="nav-bar">
        <!-- Botão Menu -->
        <div class="toggle" onclick="clkmenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <!-- Cabeçalho -->
        <header>
            <a href="index.php"><img src="assets/img/logo/Pally_logo.png" alt="logo Pally" id="header-logo"></a>
        </header>
    
        <!-- Barra de navegação -->
        <div id="nav">
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="index.php?action=precos">Preços</a></li>
                    <li><a href="index.php?action=quemsomos">Quem Somos</a></li>
                    <li><a href="index.php?action=cliente">Cliente</a></li>
                    <li><a href="index.php?action=contato">Contato</a></li>
                    <li><a id="nav-pedido" href="index.php?action=pedido">Faça seu Pedido</a></li>
                </ul>
            </nav>
        </div>
    </div>