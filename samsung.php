<?php

// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "Lendo e Entendendo", // Título desta página
    "css" => "samsung.css",            // Folha de estilos desta página
    "js" => "index.js",              // JavaScript desta página
);

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article>samsung s24ultra pronta entrega 1 tb de memoria<div class="card" onclick="location.href = 'samsung.php'">
        <br><img src="assets/img/samsung.png" alt="samsung s24 ultra lacrado">
        <div class="descricao">samsung s24ultra, lançamento na loja,<br> somente 10 unidades, corra e garanta o seu<br>
    </div>
        <div class="preco">R$6.999,00</div>
        <button>Comprar</button><br>
    </div></article>

<aside>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>