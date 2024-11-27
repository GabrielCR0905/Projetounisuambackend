<?php

session_start(); // Inicia a sessão para permitir o uso das variaveis de sessao
session_unset(); // Limpa todas as variaveis de sessão
session_destroy(); // destroi a sessao atual
header('location: index1.php'); // redireciona para a pagina de login apos o logout




?>