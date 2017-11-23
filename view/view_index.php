<?php
?>
<section style="margin-top:25%;">
    <!-- <nav> -->
        <div class="col-lg-offset-2 col-lg-8">
        <?php
            $script='';
            $SQLQuery='SELECT * FROM article';
            $SQLResult=mysqli_query($idConn,$SQLQuery);
            while($SQLRow=mysqli_fetch_array($SQLResult)){
                $article=new Article($SQLRow['article_id'], $SQLRow['article_titre'], $SQLRow['article_corps'], $SQLRow['article_date']);
                $script.='<section>';
                $script.='<a class="thumbnail col-lg-offset-1 col-lg-1" style="background-image:url(http://localhost:8080/mvc/images/pharticle/article'.$article->getId().'.jpg); height: 400px; width: 400px;" href="http://localhost:8080/mvc/index.php?article">';	
                $script.='<h3>'.$article->getTitre().'</h3>';
                $script.='</a>';
                $script.='</section>';
            }
            print($script);            
        ?>
            <button type="button" class="btn btn-lg btn-success col-xs-offset-5 col-xs-2 col-sm-offset-5 col-sm-2 col-md-offset-5 col-md-2 col-lg-2"><a href="index.php" title="Page d'accueil">Retourner à l'accueil</a></button>
        </div>
    <!-- </nav> -->
</section>
</body>