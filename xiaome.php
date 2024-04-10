<?php

// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "Lendo e Entendendo", // Título desta página
    "css" => "xiaome.css",            // Folha de estilos desta página
    "js" => "index.js",              // JavaScript desta página
);

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article><div class="card" onclick="location.href = 'xiaome.php'">
        <img src="assets/img/xiaome14pro.webp" alt="xiaome 14 pro, 1 tbde memoria e 48h de bateria">
        <div class="descricao">ultima unidade da loja, produto lacrado !!!</div>
        <div class="preco">R$8.900,00</div>
        <button>Comprar</button>
    </div></article>

<aside>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>