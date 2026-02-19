<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <img src="img/logo.jpg" alt="logo" class="ira">
        <nav>
            <a href="#">Inicio</a>
            <a href="#sobre">Sobre</a>
            <a href="#missao">Missão</a>
            <a href="#visao">Visão</a>
            <a href="#valores">Valores</a>
            <a href="#metas">Metas</a>
            <a href="#local">Localização</a>
            <?php 
echo '<p class="menu-item">Olá, ' . $_SESSION['usuario']['nome'].'<br><a href="processos/logout.php" class="hover-link">Sair da conta</a></p>';
?>
        </nav>
    </header>
    <div class="tata-wraper">
        <img src="img/tata.png" alt="tata" class="tata normal">
        <img src="img/tata.png" alt="tata" class="tata blur">,
    </div>
    <img src="img/img1.png" alt="img1" class="casa">
    <section id="sobre">
        <h2>Sobre</h2>
        <p>A APVJ (Associação de Judô) é uma entidade dedicada à promoção, ao ensino e ao desenvolvimento do judô como ferramenta de formação esportiva, educacional e social. Por meio da prática do judô, a APVJ busca contribuir para a construção de cidadãos mais disciplinados, responsáveis e conscientes de seu papel na sociedade.</p>
    </section>
    <section id="missao">
        <h2>Missão</h2>
        <p>Promover o judô de forma inclusiva e acessível, utilizando seus princípios — como respeito, disciplina, autocontrole e perseverança — para o desenvolvimento físico, mental e moral de crianças, jovens e adultos, dentro e fora dos tatames.</p>
    </section>
    <section id="visao">
        <h2>Visão</h2>
        <p> Ser reconhecida como uma associação de referência na formação de atletas e cidadãos, destacando-se pela excelência técnica, pelos valores humanos e pelo impacto positivo na comunidade.
        </p>
    </section>
    <section id="valores">
        <h2>Valores</h2>
        <ul>
            <li>Respeito e ética</li>
            <li>Disciplina e responsabilidade</li>

            <li>Inclusão social</li>

            <li>Trabalho em equipe</li>

            <li>Superação e humildade</li>
        </ul>
    </section>
    <section id="metas">
        <h2>Metas</h2>
        <ul>
            <li>
                Incentivar a prática do judô como esporte e filosofia de vida</li>

            <li>Desenvolver atletas para competições locais, regionais e nacionais</li>

            <li>Oferecer formação contínua a professores e instrutores</li>

            <li>Promover projetos sociais voltados à inclusão e ao bem-estar</li>

            <li>Fortalecer parcerias com escolas, comunidades e instituições públicas e privadas</li>

        </ul>

    </section>

<section id="local">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d461.04607912697213!2d-50.5774462!3d-22.415147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9495055d25a7e293%3A0x68d12ae4c679357!2sCentro%20de%20Treinamento%20de%20Jud%C3%B4%20Isaburo%20Suto!5e1!3m2!1spt-BR!2sbr!4v1771467770572!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


</body>

</html>