<?php

function sidebar()
{
    echo 
    "<div class='sidebar animate-left' style='display:none' id='mySidebar'>
        <a href='#' class='bar-item bar-button btn-close-bar' onclick='sidebar_close()'>&#9776;</a>
        <a id='user' href='control-panel.php?table=user' class='bar-item bar-button'>Usuarios</a>
        <a id='property' href='control-panel.php?table=property' class='bar-item bar-button'>Imoveis</a>
        <a id='rent' href='control-panel.php?table=rent' class='bar-item bar-button'>Alugueis</a>
        <a id='token' href='control-panel.php?table=token' class='bar-item bar-button'>Tokens</a>
        <a href='create-user2.php' class='bar-item bar-button'>Importar Usuários</a>
    </div>

    <div id='openNav' class='closed-bar'>
        <button class='bar-button' onclick='sidebar_open()'>&#9776;</button>
    </div>";
}