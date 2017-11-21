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

        <ul>
            <li><a href="http://www.google.com">google</a></li>
            <li><a href="http://www.Youtube.com">youtube</a></li>
            <li>twitter</li>
            <li>facebook</li>
            <li>netflix</li>
        </ul>
    </section>

    <footer>
        <!-- GOOGLE ANALITYCS HERE-->
    </footer>
</body>