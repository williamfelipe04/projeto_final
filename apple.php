<?php

// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "Lendo e Entendendo", // Título desta página
    "css" => "apple.css",            // Folha de estilos desta página
    "js" => "index.js",              // JavaScript desta página
);

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article>iphone 15 pro max, de 10,999.00 por 9,999.00<br>(verificar disponibilidade)<br>< </article>

<aside><div class="card" onclick="location.href = 'apple.php'">
        <img src="assets/img/iphone15.png" alt="iphone15 pro max lacrado">
        <div class="descrição">iphone de 128gb lacrado e com pronta entrega</div>
        <div class="preço">R$9,999,00</div>
        <button>Comprar</button>
    </div>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>