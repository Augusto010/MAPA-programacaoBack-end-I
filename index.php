<?php
    include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="logo.png" class="logo"></a>
        <nav>
            
            <a href="#"><h3 class="a1">home</h3></a>
            <a href="#"><h3 class="a1">Blog</h3></a>
            <a href="#"><h3 class="a1">Conheça Dona Rita</h3></a>
        </nav>
    </header>

    <main>
            <div class="fundo">
            <h1 class="texto-fundo"><b>Marmitas da Dona Rita, escolha as suas!!</b></h1>
            </div>
            <h1 class="confira">Confira nossas marmitas:</h1>
            <div class="cardapio">
            <?php
            
                foreach($marmitas as $key => $value){
                
            ?>
            <article>
                <div class="item">
                <h2><?=$value["nome"];?></h2>
                <a href="index2.php?id=<?=$value["id"];?>"><img  class="img" src=<?=$value["imagem"];?>></a>
                <p><?=substr($value["tamanho"], 0, 150);?></p>
                <p><?=substr($value["ingredientes"], 0, 150);?></p>
                </div>
            </article>
            <?php
                }
            ?>
            </div>
    </main>

    <footer class="footer"> 
            <div class="item0">
                <h2>Quer saber mais?</h2> 
                <h2 >Nossas páginas:</h2>
                <div class="contato">
                <a href=#> Instagram </a>
                <a href=#> Facebook </a>
                <a href=#> YouTube </a>
                </div>
            </div>
        <div>
            <h2>Aluno: Augusto Henrique</h2>
            <h2>RA: 21103682-5</h2>
        </div>
        <div>
            </h3>quer ficar informado e receber nossas noticias?<h3>
            <form action="pagina1.php" method="POST">
                <input type="text" name="nome" placeholder="Seu nome">
                <input type="email" name="email" placeholder="Seu E-mail">
                <button>OK!</button>
            </form>
        </div>
    </footer>

</body>
</html>