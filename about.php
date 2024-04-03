<?php

// Carrega configurações globais
require("_global.php");

// Configurações desta página
$page = array(
    "title" => "Lendo e Entendendo",
    "css" => "about.css"
);

// Inicializa a view de colaboradores
$employees = '';

// Obtém a lista de colaboradores do banco de dados
$sql = <<<SQL

SELECT 
	-- Campos necessários
    emp_id, emp_photo, emp_name, emp_type,
    -- Converte a data de cadastro
    DATE_FORMAT(emp_date, "%d/%m/%Y") AS emp_datebr,
    -- Obtém a idade
    TIMESTAMPDIFF(YEAR, emp_birth, CURDATE()) AS emp_age 
FROM employee
-- Requisitos
WHERE emp_status = 'on'
-- Ordena pelo mais antigo
ORDER BY emp_date;

SQL;
$res = $conn->query($sql);

if ($res->num_rows > 0) :

    $employees .= <<<HTML

        <h3>Empresas parceiras</h3>
        <p>No {$site['sitename']}, trabalhamos com as melhores empresas do mercado.</p>
        <div class="emprow">

    HTML;

    while ($row = $res->fetch_assoc()) :

        switch ($row['emp_type']):
            case 'admin':
                $emp_type = 'administrador';
                break;
            case 'author':
                $emp_type = 'autor';
                break;
            case 'moderator':
                $emp_type = 'moderador';
                break;
            default:
                $emp_type = 'colaborador';
                break;
        endswitch;

        $employees .= <<<HTML

        <div class="empcol">
            <img src="{$row['emp_photo']}" alt="{$row['emp_name']}">
            <h3>{$row['emp_name']}</h3>
            <ul>
                <li>{$row['emp_age']} anos</li>
                <li>Colabora desde {$row['emp_datebr']} como {$emp_type}.</li>
            </ul>
        </div>

        HTML;

    endwhile;

    $employees .= '</div>';

endif;

// Inclui o cabeçalho do documento
require('_header.php');
?>

<article>

    <h2>Sobre o <?php echo $site['sitename'] ?></h2>
    <p><em>Bem-vindo ao <?php echo $site['sitename'] ?>, assistencia tecnica de alta qualidade para o seu smartphone!</em></p>
    <p>Fundada em 2023, com destino a entregar e oferecer serviços de assistencia de alta qualidade, aceitamos encomendas de todo o brasil com taxa 0 de entrega !!! .</p>

    <h3>Nossa missão</h3>
    <p>Com o <?php echo $site['sitename'] ?>, gostamos de oferecer o melhor para os nossos clientes, com o intuitto de mostrar segurança e fidelizar os nossos serviços ao publico, sempre com bom atendimento e com as melhores marcas do mercado</p>

    <div class="emprow">

        <div class="empcol">
            <img src="assets/img/maaça.png" alt="{$row['emp_name']}">
        </div>
        <div class="empcol">
            <img src="assets/img/samsung_882849.png" alt="{$row['emp_name']}">
        </div>
        <div class="empcol">
            <img src="assets/img/xiaomi_882720.png" alt="{$row['emp_name']}">
        </div>
        <div class="empcol">
            <img src="assets/img/asus_882744.png" alt="{$row['emp_name']}">
        </div>

    </div>

</article>

<aside>

    <h3>Veja +</h3>
    <ul>
        <li><a href="contacts.php">Faça contato conosco</a></li>
        <li><a href="about.php">Sobre o <?php echo $site['sitename'] ?></a></li>
    </ul>

    <?php
    // Mostra ícone de contatos na lista de redes sociais
    $show_contact = true;
    // Importa lista de redes sociais
    require('widgets/_socialaside.php');
    // Importa lista de artigos recentes
    require('widgets/_newest.php');
    ?>

</aside>

<?php
// Inclui o rodapé do documento
require('_footer.php');
?>