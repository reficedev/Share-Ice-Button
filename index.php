<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutons de partage - ICE DEV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="l-container">


        <h1>Boutons de partage</h1>

        <div class="gplus_cont">
            <div class="g-plusone"></div>
        </div>

        <script type="text/javascript">
            window.___gcfg = {lang: 'fr'};

            (function () {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                po.src = 'https://apis.google.com/js/platform.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
            })();
        </script>


        <br/>

        <div id="share">
            <button type="button" class="icon-share">Partagez !</button>



            <?php
           // $url_actuelle = "<script language='Javascript'> document.write(document.URL); </script>";

            $url_actuelle = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            ?>

            <ul>
                <li><a target="_blank" class="icon-mail"
                       href="mailto:?subject=Partage de lien&body=<?php echo $url_actuelle; ?>"
                       title="Partagez par mail">Par mail</a></li>
                <li><a target="_blank" class="icon-gplus"
                       href="https://plus.google.com/share?url=<?php echo urlencode($url_actuelle); ?>"
                       title="Partagez sur Google +">Google +</a></li>
                <li><a target="_blank" class="icon-twitter"
                       href="http://twitter.com/share?url=<?php echo urlencode($url_actuelle); ?>"
                       title="Partagez sur Twitter">Twitter</a></li>
                <li><a target="_blank" class="icon-facebook"
                       href="http://www.facebook.com/share.php?u=<?php echo urlencode($url_actuelle); ?>"
                       title="Partagez sur Facebook">Facebook</a></li>
			    <li><a target="_blank" class="icon-linkedin"
                   href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($url_actuelle); ?>&title=TitreDeVotrePage"
                   title="Partagez sur LinkedIn">LinkedIn</a></li>
            </ul>


        </div>

        <p>
            Source : <a href="http://blog.ice-dev.com" target="_blank">ICE Blog</a>
        </p>


        <footer>
            <a href="http://www.ice-dev.com" target="_blank">ICE DEVELOPMENT</a> - 16 rue Maurice Bouchor 69007 Lyon - <a href="tel:0821230354" target="_blank">0821 23 03 54</a>
        </footer>
    </div>




</body>
</html>