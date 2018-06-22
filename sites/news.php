<?php



    function prepareData(){
        $pdo = new PDO("mysql:host=localhost;dbname=73DB", "root", "");
        $pdo->exec("set names utf8");
        $result = $pdo->query("SELECT * FROM news");
        foreach ($result as $row)
        {
           echo "<div class='article_container'> 
                    <p class='date'> " . $row["date"] . " </p>
                    <div class=\"article_header\">
                        <p> " . $row["articleHeader"] . "</p>
                    </div>
                   <div class=\"article\">
                        <p>" . $row["article"] .  "</p>
                    </div>
                    <div class=\"additional_info\">
                        <p>" . $row["additional_info"] . "</p>
                    </div>
                </div>


           ";
           
        }



    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekt Titan - News</title>
    <link rel="stylesheet" href="../style/basic.css">
    <link rel="stylesheet" href="../style/newNav.css">
    <link rel="stylesheet" href="../style/news.css">

</head>
<body>


<nav class="main-navigation">
    <ul class="menu">
        <li><a href="../../../HTML_Files/projekte.html">Zurück</a></li>
        <li><a href="../index.html">Start</a></li>
        <li><a href="news.html">News</a></li>
        <li class="menu-item-has-children"><a href="support.html">Support</a>
            <ul class="sub-menu">
                <li><a href="support.html#Navigation">Themen</a></li>
                <li><a href="support.html#Q&A">Q&A</a></li>
                <li><a href="support.html#Hotline">Hotline</a></li>

            </ul>
        </li>
        <li><a href="ueberUns.html">Über uns</a></li>

        <li><a href="feedback.html">Feedback</a></li>
    </ul>
</nav>
<main>
    <div class="header">
        <p>News & Developer Changes.</p>
    </div>


    <article class="news">

        <?php prepareData() ?>
    </article>

</main>

<footer>
    <p><a href="impressum.html">Impressum</a></p>
    <p>made by LAB73 in Österreich</p>
</footer>
</body>
</html>