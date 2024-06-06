
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Administrativo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <h2>Menu</h2>
            <ul>

                <li><a href="pessoas.php">Usuários</a></li>
                <li><a href="veiculos.php">Veiculos</a></li>

            </ul>
        </nav>
        <main class="content">
            <header>
                <h1>Painel Administrativo</h1>
            </header>
            <section>
                <h2>Bem-vindo!</h2>
            

<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
}

.container {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    box-sizing: border-box;
}

.sidebar h2 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 10px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    display: block;
    padding: 10px;
    transition: background 0.3s;
}

.sidebar ul li a:hover {
    background-color: #34495e;
    border-radius: 5px;
}

.content {
    flex: 1;
    background-color: #ecf0f1;
    padding: 20px;
    box-sizing: border-box;
    overflow-y: auto;
}

.content header {
    background-color: #2980b9;
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
}

.content section {
    margin-top: 20px;
}

.content h2 {
    font-size: 22px;
    margin-bottom: 10px;
}

.content p {
    font-size: 16px;
    line-height: 1.5;
}

</style>