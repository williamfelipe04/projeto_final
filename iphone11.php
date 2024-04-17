<?php

// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "Lendo e Entendendo", // Título desta página
    "css" => "iphone11.css",            // Folha de estilos desta página
    "js" => "index.js",              // JavaScript desta página
);

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article>Reformado, sem marca de uso, garantia extendida  <div class="card" onclick="location.href = 'iphone11.php'">
        <br><img src="assets/img/iphone11pro.webp" alt="iphone 11pro">
        <div class="descrição">reformado, bateria 100%<br>1 ano de garantia, memoria de 128gb<br>
    </div>
        <div class="preço">R$2.399,00</div>
        <button>Comprar</button><br>
    </div></article>

<aside>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>