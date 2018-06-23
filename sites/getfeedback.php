<?php


    // wird für uns in eine interne datenbank geladen, in der wir nachsehen können.
    function init() {

        $pdo = new PDO("mysql:host=localhost;dbname=feedback", "root", "");
        $pdo->exec("set names utf8");

        if (isset($_POST) && isset($_POST["betreff"]) && isset($_POST["text"]) && isset($_POST["email"])&& $_POST["betreff"] != "" && $_POST["text"] != "" && $_POST["email"] != "") {
            $stmt = $pdo->prepare("INSERT INTO feedback (betreff, text, email) VALUES (:betreff, :text, :email)");
            $stmt->execute(["betreff" => $_POST["betreff"], "text" => $_POST["text"], "email" => $_POST["email"]]);

            //header...
            header("location:danke.html");
        } else {
            header("location:fehler.html");
        }
    }

    init();
?>