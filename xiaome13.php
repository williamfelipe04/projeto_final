<?php

// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "Lendo e Entendendo", // Título desta página
    "css" => "xiaome13.css",            // Folha de estilos desta página
    "js" => "index.js",              // JavaScript desta página
);

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article>xiaome 13pro, vitrine <div class="card" onclick="location.href = 'xiaome13.php'">
        <br><img src="assets/img/xiaome13pro.webp" alt="xiaome 13pro">
        <div class="descrição">xiaome 13pro, 6 meses de garantia<br> produto de vitrine, saude da bateria em 98%<br>
    </div>
        <div class="preço">R$2.799,00</div>
        <button>Comprar</button><br>
    </div></article>

<aside>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>