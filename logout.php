<?php
include('criasessao.php');
//LIMPA AS VARIAVÉIS DA SESSÃO
session_unset();
//DESTRÓI A SESSÃO
session_destroy();
//VOLTA PARA A PÁGINA INICIAL
header('Location: index.php');
?>