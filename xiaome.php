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

<article></article>

<aside><div class="card" onclick="location.href = 'xiaome.php'">
        <img src="" alt="">
        <div class="descricao">kdfsjogushaoiçgasdoipgjpdsjg psd</div>
        <div class="preco">R$40,00</div>
        <button>Comprar</button>
    </div>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>