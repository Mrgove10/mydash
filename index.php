<!DOCTYPE html>
<head>
    <title>MyDash</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> <!-- utilisation d'un google font -->
    <meta charset="utf-8">
    <span id="hautDePage"> </span>
    <?php
    setlocale(LC_TIME, 'fra_fra');
    ?>
</head>
<body>
    <header>

    </header>
    <section class="MainTime">
        <script>
        function date_heure(id)
        {
            date = new Date;
            annee = date.getFullYear();
            moi = date.getMonth();
            mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
            j = date.getDate();
            jour = date.getDay();
            jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
            h = date.getHours();
            if(h<10)
            {
                h = "0"+h;
            }
            m = date.getMinutes();
            if(m<10)
            {
                m = "0"+m;
            }
            s = date.getSeconds();
            if(s<10)
            {
                s = "0"+s;
            }
            resultat = jours[jour]+' '+j+' '+mois[moi]+' '+annee+'<br>'+h+':'+m+':'+s;
            document.getElementById(id).innerHTML = resultat;
            setTimeout('date_heure("'+id+'");','1000');
            return true; 
        }
        </script>
        <span id="date_heure"></span>
        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
    </section>
    <section class="Sites">
        <ul class="divers">
            <li>Divertissement</li>
            <li><a href="http://www.Youtube.com">Youtube</a></li>
            <li><a href="https://twitter.com/">Twitter</a></li>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://www.netflix.com/fr/">Netflix</a></li>
        </ul>
        <ul>
            <li>Utilitaire</li>
            <li><a href="http://www.google.com">Google</a></li>
        </ul>
    </section>

    <footer>
        <!-- GOOGLE ANALITYCS HERE-->
    </footer>
</body>