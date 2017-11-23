<?php
?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Mama mundi </title>
<link rel="stylesheet" href="./css/styles.css"/>
<link rel="stylesheet" href="./css/menuder.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="./view/menu.js"></script>
</head>
<body background="images/back1.jpg">

<!--______________________Menu______________________ -->

<div id="navbar">
    <div id="bandeau">
        <a href="index.php"> <img src="images/Logo1.png" alt="image bandeau"/></a>
        <h1>Mama Mundi</h1>
        <div id="icones">
            <img src="images/france.svg" alt="image bandeau"/>
            <img src="images/spain.svg" alt="image bandeau"/>
            <a href="https://www.facebook.com/asociacion.jaimerever/?ref=page_internal"><img src="images/facebook.svg" alt="image bandeau"/></a>
            <img src="images/twitter.svg" alt="image bandeau"/>
            <a href="https://www.youtube.com/channel/UC1LRzm-VfgE9KHXJpKcjiLQ"><img src="images/youtube.svg" alt="image bandeau"/></a>
        </div>
    </div>
    <div id="menu">
        <ul id="menu_der">
            <li>
                <a id="liens" href="index.php" title="Page d'acceuil">Accueil</a>
            </li>
            <li>
                <a id="liens" href="asso.php" title="Page d'acceuil">L’association</a>
                    <ul>
                        <li><a href="#">Notre organisation</a></li>
                        <li><a href="#">Notre mission</a></li>
                        <li><a href="#map">Nos projets</a></li>
                        <li><a href="#">Notre équipe au Sénégal</a></li>
                    </ul>
            </li>
            <li>
                <a id="liens" href="activite.php" title="Page actualités">Nos activités</a>
                    <ul>
                        <li><a href="#">Éducation</a></li>
                        <li><a href="#">Formation professionnelle</a></li>
                        <li><a href="#">Soutien aux familles</a></li>
                        <li><a href="#">Nos résultats</a></li>
                        <li><a href="#">Matériel éducatif</a></li>
                    </ul>
            </li>
            <li>
                <a id="liens" title="Page formulaire">Nous soutenir</a>
                    <ul>
                        <li><a href="parrainer.php">Parrainer</a></li>
                        <li><a href="don.php">Faire un don</a></li>
                        <li><a href="benevole.php">Devenir bénévole</a></li>
                    </ul>
            </li>
        </ul>
    </div>
</div>
