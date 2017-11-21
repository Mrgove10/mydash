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
        <?php
        echo strftime('%A %d %B %Y');?>
        <br>
        <?php
        echo strftime('%H:%M');
        ?>
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