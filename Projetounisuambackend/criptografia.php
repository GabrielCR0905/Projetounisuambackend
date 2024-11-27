<?php 
// Define a senha Original
$senha = "12345";

// Codifica a senha usando o algoritmo base64
$novasenha = base64_encode ($senha);
echo "base64: ".$novasenha. "<br>";

// Decodifica a senha base64 e a exibe
echo "sua senha é: ". base64_decode($novasenha);

echo "<hr>";

// Gera a hash MD5 da senha
echo "Md5:".md5($senha). "<br>";

// Gera a hash SHA-1 da senha e exibe
echo "sha1: " .sha1($senha);







?>