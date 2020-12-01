<?php 
    require_once("../autoload.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Tem Vaga ai</title>
    <link rel="shortcut icon" href="../img/ico.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.5/examples/album/album.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">

</head>

<body>
    <?php include 'views-parts/header.php';
        headerResult();
    ?>

    <div class="sidebar animate-left" style="display:none" id="mySidebar">
        <a href="#" class="bar-item bar-button btn-close-bar" onclick="sidebar_close()">&#9776;</a>
        <a id="user" href="control-panel.php?table=user" class="bar-item bar-button">Usuarios</a>
        <a id="property" href="control-panel.php?table=property" class="bar-item bar-button">Imoveis</a>
        <a href="#" class="bar-item bar-button">Alugueis</a>
        <a href="#" class="bar-item bar-button">Tokens</a>
		<a href="create-user2.php" class="bar-item bar-button">Importar Usuários</a>
    </div>

    <div id="openNav" class="closed-bar">
        <button class="bar-button" onclick="sidebar_open()">&#9776;</button>
    </div>

    <main>
        <?php
            $table = (isset($_GET["table"]))? $_GET["table"] : "user";
            echo "<a href='create-$table.php'>
                    <button class='create-button transition'>Novo +</button>
                </a>";
            if(array_key_exists("message", $_GET)){
                echo "<p id='message' class='transition message ". $_GET["type"] ." '>" . $_GET["message"] . "<p>";
            }   

            switch ($table) {
                case 'user':
                    $users = new Users();
                    $users->table();                    
                    break;
                case 'property':
                    $properties = new Properties();
                    $properties->table();
                    break;
                default:
                    
                    break;
            }            
        ?>
    </main>

    <?php include 'views-parts/footer.php';
    footer();
    ?>

    <script src="../js/sidebar.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/slide.js"></script>
</body>

</html>