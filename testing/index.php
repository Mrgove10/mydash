<!DOCTYPE html>
<head>
    <title>MyDash</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> <!-- utilisation d'un google font -->
    <meta charset="utf-8">
    <span id="hautDePage"> </span>
</head>
<body>
    <header>


    </header>
    <section class="MainTime">
        <h1>it is</h1>
        <?php
        setlocale(LC_TIME, 'fra_fra');
        echo strftime('%A %d %B %Y');?>
        <br>
        <?php
        echo strftime('%H:%M');
        ?>
    </section>
    <section class="Sites">
        <a href="http://www.google.com">google</a>
    </section>





    <footer>
        <!-- GOOGLE ANALITYCS HERE-->
    </footer>
</body>