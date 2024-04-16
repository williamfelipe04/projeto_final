<?php
// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "seminovos", // Título desta página
    "css" => "iphone12.css",            // Folha de estilos desta página
    "js" => "index.js",              // JavaScript desta página
);

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article><div class="card" onclick="location.href = 'iphone12.php'">
        <img src="assets/img/iphone12.jpg" alt="iphone12">
        <div class="descriçao">produto reformado, poucas marcas de uso </div>
        <div class="preço">R$2.900,00</div>
        <button>Comprar</button>
    </div></article>

<aside>
</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>