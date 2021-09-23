<?php

require("./funcoes.php");

//RECEBENDO OS DADOS DO FORMULARIO
$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];

realizarLogin($usuario, $senha, lerArquivo("dados/usuarios.json"));