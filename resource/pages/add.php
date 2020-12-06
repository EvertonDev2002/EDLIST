<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:image" content="https://ed-list.herokuapp.com/images/logo/ico.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
    <title>Administração - EdList</title>
    <link rel="icon" sizes="144x144" href="../images/favicon/favicon-144.png">
    <link rel="icon" sizes="128x128" href="../images/favicon/favicon-128.png">
    <link rel="icon" sizes="96x96" href="../images/favicon/favicon-96.png">
    <link rel="icon" sizes="64x64" href="../images/favicon/favicon-64.png">
    <link rel="icon" sizes="48x48" href="../images/favicon/favicon-48.png">
    <link rel="icon" sizes="32x32" href="../images/favicon/favicon-32.png">
    <link rel="icon" sizes="16x16" href="../images/favicon/favicon-16.png">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/main_4.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
    <script src='../scripts/menu.js' defer></script>
    <script src='../scripts/preview.js' defer></script>
</head>
<body>
    <nav class="menu-op">
        <span>Administração</span>
    </nav>
    <?php require_once("../model/alunos.php")?>
    <section class="conteudo">
        <form  class="form" method="POST" action="../database/data/add_list.php">
        <select require name="disc">
            <option>Disciplina</option>
            <?php require_once("../model/disciplina.php")?>
        </select>
            <input type="url" autocomplete="off" name="url" require placeholder="https://exemplo.com">
            <input type="date" require name="dataEntrega">
            <button type="submit">Adicionar</button>
        </form>
        <form  class="form" method="POST" enctype="multipart/form-data" action="../database/data/add_aluno.php">
            <div class="fotoPrew">
                <img id="mostrarAqui"> 
                <input style="display: none;" id="esfoto" type="file" accept="image/*" name="foto" onchange="mostrarImagem(event)">
            </div>
            <input type="text" autocomplete="off" require name="aluno_novo" placeholder="Nome do aluno">
            <input type="password" maxlength="8" placeholder="Senha" name='pass'>
            <label for="esfoto">Foto de perfil</label>
            <button type="submit">Adicionar</button>
        </form>
    </section>
    <header class="menu">
        <div class="pop video">
            <span>Aulas Gravadas</span>
            <ul> 
                <li><a target='_blank' href="https://classroom.google.com/u/1/w/NzM3Nzc0MTUwMTBa/tc/NzQ3ODYxNzY5NDVa">Química</a></li>
                <li><a target='_blank' href="https://classroom.google.com/u/1/w/NzM3Nzc0MTUwMTBa/tc/NzQ3ODg1NDEyODFa">Matemático</a></li>
                <li><a target='_blank' href="https://drive.google.com/drive/u/0/folders/0B6VhsdzZjtmgfjQ2SkI3VExEdHNEQ3h0d1NTaFg2RGpSbnVLUXF3Q044MFk0R29peEJnYk0">Israel</a></li>
                <li><a target='_blank' href="https://drive.google.com/drive/u/1/folders/1rrSUUool6beDzCQInThG1HIXBPZnfeNR">Homero</a></li>
            </ul>
        </div>
        <nav>
            <ul> 
                <?php echo $icon?>
                <li class="fas fa-video icon1"></li>
                <?php echo "$al";?>
                <a  rel='prev' class="fas fa-house-user" href="./geral.php"></a>
            </ul>
        </nav>
    </header>
</body>
</html>