-- ------------------------------------------------- --
-- Cria o banco de dados da aplicação no MySQL.      --
-- Referências:                                      --
--  •  MySQL → https://www.w3schools.com/mysql       --
--  •  SQL ANSI → https://www.w3schools.com/sql      --
-- ------------------------------------------------- --
--      ATENÇÃO! DANGER! PERIGO! CUIDADO! OOOPS!     --
-- ------------------------------------------------- --
-- Este script só deve ser usado em desenvolvimento. --
-- Ele apaga o banco de dados e recria as estruturas --
-- do zero, apagando dados preexistentes.            --
-- Apague este arquivo no branch de produção.        --
-- ------------------------------------------------- --

-- Apaga o banco de dados caso ele exista.
DROP DATABASE IF EXISTS helloword;

-- Cria o banco de dados.
--     Seleciona o CHARSET UTF-8 para aramazenar caracteres do portugês.
--     Seleciona o COLLATE 'utf8mb4_general_ci' para fazer buscas case-insensitive.
CREATE DATABASE helloword CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Seleciona o banco de dados para criar as tabelas.
USE helloword;

-- Cria a tabela 'employee'.
CREATE TABLE employee (
    emp_id INT PRIMARY KEY AUTO_INCREMENT,
    emp_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    emp_photo VARCHAR(255),
    emp_name VARCHAR(127) NOT NULL,
    emp_birth DATE,
    emp_email VARCHAR(255) NOT NULL,
    emp_password VARCHAR(63) NOT NULL,
    emp_type ENUM('admin', 'author', 'moderator') DEFAULT 'moderator',
    emp_status ENUM('on', 'off', 'del') DEFAULT 'on'
);

-- Cria a tabela 'article'.
CREATE TABLE article (
    art_id INT PRIMARY KEY AUTO_INCREMENT,
    art_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    art_thumbnail VARCHAR(255),
    art_title VARCHAR(127),
    art_summary VARCHAR(255),
    art_author INT,
    art_content TEXT,
    art_views INT DEFAULT '0',
    art_status ENUM('on', 'off', 'del') DEFAULT 'on',
    FOREIGN KEY (art_author) REFERENCES employee(emp_id)
);

-- Cria a tabela 'comment'.
CREATE TABLE comment (
    cmt_id INT PRIMARY KEY AUTO_INCREMENT,
    cmt_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    cmt_article INT,
    cmt_social_id VARCHAR(255),
    cmt_social_name VARCHAR(255),
    cmt_social_photo VARCHAR(255),
    cmt_social_email VARCHAR(255),
    cmt_content TEXT,
    cmt_status ENUM('on', 'off', 'del') DEFAULT 'on',
    FOREIGN KEY (cmt_article) REFERENCES article(art_id)
);

-- Cria a tabela 'contact'.
CREATE TABLE contact (
    ctt_id INT PRIMARY KEY AUTO_INCREMENT,
    ctt_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ctt_name VARCHAR(255),
    ctt_email VARCHAR(255),
    ctt_subject VARCHAR(255),
    ctt_message TEXT,
    ctt_status ENUM('received', 'read', 'answered', 'deleted') DEFAULT 'received'
);

-- --------------------------------------------------------------- --
-- Insere alguns dados "fake" nas tabelas para os testes iniciais. --
-- Dizemos "popular tabela com dados".
-- --------------------------------------------------------------- --

-- Popular tabela 'employee'.
INSERT INTO employee (
    emp_id, emp_photo, emp_name, emp_birth, emp_email, emp_password, emp_type
) VALUES 
('1', 'https://randomuser.me/api/portraits/lego/5.jpg', 'Bruno Cardoso', '2000-01-29', 'joca@silva.com', SHA1('senha123'), 'admin'),
('2', 'https://randomuser.me/api/portraits/women/33.jpg', 'William Felipe', '1984-09-20', 'mari@neuza.com', SHA1('senha123'), 'author');

-- Popular tabela 'article'.
INSERT INTO article
    (
        art_id, 
        art_author, 
        art_thumbnail,
        art_title, 
        art_summary, 
        art_content
    )
VALUES

    (
        '1', 
        '2', 
        'assets/img/logos.png',
        'Nossa assistencias tecnica',
        'Conheça o nosso trabalho profissional.',
        '
            <p> Assistência técnica especializada é fundamental para garantir o reparo eficiente de dispositivos eletrônicos e eletrodomésticos. Ao optar por um serviço de assistência técnica especializada, os clientes podem ter a certeza de que seus produtos serão reparados por profissionais qualificados e experientes, que possuem conhecimento específico sobre o funcionamento dos equipamentos. Além disso, esses serviços geralmente oferecem peças originais e seguem os padrões de qualidade estabelecidos pelo fabricante, garantindo assim a durabilidade e o desempenho adequado dos produtos após o reparo.</p>
            
            <figure>
            <img src="assets/img/logos.png" alt="Imagem qualquer">    
            <figcaption></figcaption>                    
            </figure>
       '
    ), (
        '2', 
        '1',
        'assets/img/iphone.png',
        'smartphones seminovos ',
        'segunda linha e vitrine .',
        '
            <p>produtos reformados e com garantia da loja de 6 meses.</p>
            <p></p>
            <figure>
            <img src="assets/img/iphone12.jpg" class="w3-circle" alt="">    
            <figcaption>iphone 12.</figcaption>                    
            </figure>
            '
        '     <figure>
            <img src="assets/img/samsungs20.webp" alt="">    
            <figcaption>samsung s20.</figcaption>                    
            </figure>
                '
        '     <figure>
            <img src="assets/img/xiaome13pro.webp" alt="">    
            <figcaption>xiaome 13pro.</figcaption>                    
            </figure>
            '
                
        '     <figure>
            <img src="assets/img/iphone11pro.webp" alt="Imagem qualquer">    
            <figcaption>iphone 11pro.</figcaption>                    
            </figure>
            '
            
    ), (
        '3', 
        '2',
        'assets/img/lacrado.png',
        'smartphones disponiveis em nossa loja',
        'temos os seguintes produtos (lacrados)',
      '
<a href="xiaome.php">
    <img src="assets/img/xiaome14pro.webp" alt="Imagem qualquer">

</a>
<a href="motorola.php">
    <img src="assets/img/motorolag24power.png" alt="Imagem qualquer">
</a>
<a href="samsung.php">
    <img src="assets/img/samsung.png" alt="Imagem qualquer">
</a>
<a href="apple.php">
    <img src="assets/img/iphone15.1.png" alt="iphone 15 pro max">
    </a>
   '
   
    );
    


-- Popular tabela 'comment'.
INSERT INTO comment 
(
    cmt_article,
    cmt_social_id,
    cmt_social_name,
    cmt_social_photo,
    cmt_social_email,
    cmt_content
) VALUES
(
    '1', 
    'abc123',
    'Mariah do Bairro', 
    'https://randomuser.me/api/portraits/women/40.jpg',
    'mariahbairro@gmail.com',
    'troquei meu diplay com a premetech, depois de 6 meses ainda continua funcionando, loja 1005 confiavel.'
), (
    '2', 
    'def456',
    'Esmeraldino', 
    'https://randomuser.me/api/portraits/lego/7.jpg',
    'esmeraldo@dino.com',
    'otima assistencia tecnica, super recomendo.'
), (
    '1', 
    'ghi890',
    'Pedro Pedroso', 
    'https://randomuser.me/api/portraits/men/87.jpg',
    'pedro@pedroso.com',
    'Flamengo campeão da libertadores de 2024.'
), (
    '1', 
    'ghi890',
    'Pedro Pedroso', 
    'https://randomuser.me/api/portraits/men/87.jpg',
    'pedro@pedroso.com',
    'comprei um iphone com a loja, me deram desconto no dinheiro e ainda ganhei um carregador, recomendo demaissss.'
), (
    '2', 
    'ghi890',
    'Pedro Pedroso', 
    'https://randomuser.me/api/portraits/men/87.jpg',
    'pedro@pedroso.com',
    'entrega rapida.'
), (
    '1', 
    'ghi890',
    'Pedro Pedroso', 
    'https://randomuser.me/api/portraits/men/87.jpg',
    'pedro@pedroso.com',
    'feliz demais.'
);

-- Popular tabela 'contact'.








-- copia e cola no banco de dados do sql para executar o site no google