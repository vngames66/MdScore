<?php
// INDEX.PHP
// This file is part of MdScore.
// Copyright (C) 2016 MilaDesign.ir
// All rights reserved.
    ob_start();
    session_start();
    include("includes/Inc/config.php");
    include("includes/Inc/functions.php");
    include("includes/Inc/jdf.class.php");
    install();
    $web = mysql_fetch_array(mysql_query("SELECT * FROM settings ORDER BY id DESC LIMIT 1"));
    $url = $web['url'];
    if (empty($_GET['d'])) {
        $m = protect($_GET['m']);
        switch ($m) {
            case "admin":
				include("includes/Source/header.php");
                include("includes/Source/admin.php");
				include("includes/Source/footer.php");
                break;
            case "login":
				include("includes/Source/header.php");
                include("includes/Source/login.php");
				include("includes/Source/footer.php");
                break;
            case "add":
				include("includes/Source/header.php");
                include("includes/Source/add.php");
				include("includes/Source/footer.php");
                break;
            case "table":
				include("includes/Source/header.php");
                include("includes/Source/table.php");
				include("includes/Source/footer.php");
                break;
            case "home":
				include("includes/Source/header.php");
                include("includes/Source/home.php");
				include("includes/Source/footer.php");
                break;
            case "game":
				include("includes/Source/header.php");
                include("includes/Source/game.php");
				include("includes/Source/footer.php");
                break;
            case "tables":
				include("includes/Source/header.php");
                include("includes/Source/tables.php");
				include("includes/Source/footer.php");
                break;
            case "contact":
				include("includes/Source/header.php");
                include("includes/Source/contact.php");
				include("includes/Source/footer.php");
                break;
            case "settings":
				include("includes/Source/header.php");
                include("includes/Source/settings.php");
				include("includes/Source/footer.php");
                break;
            case "games":
				include("includes/Source/header.php");
                include("includes/Source/games.php");
				include("includes/Source/footer.php");
                break;
            case "games_edit":
				include("includes/Source/header.php");
                include("includes/Source/games_edit.php");
				include("includes/Source/footer.php");
                break;
            case "table_edit":
				include("includes/Source/header.php");
                include("includes/Source/table_edit.php");
				include("includes/Source/footer.php");
                break;
            case "games_delete":
				include("includes/Source/header.php");
                include("includes/Source/games_delete.php");
				include("includes/Source/footer.php");
                break;
            case "table_delete":
				include("includes/Source/header.php");
                include("includes/Source/table_delete.php");
				include("includes/Source/footer.php");
                break;
            case "table_send":
                include("includes/Source/table_send.php");
                break;
            case "receive":
                include("includes/Source/receive.php");
                break;
            case "json":
                include("includes/Source/json.php");
                break;
            case "rank":
                include("includes/Source/rank.php");
                break;
            case "logout":
                unset($_SESSION['usern']);
                unset($_SESSION['user_id']);
                session_unset();
                session_destroy();
                header("Location: ./");
                break;
            default:
				include("includes/Source/header.php");
                include("includes/Source/home.php");
				include("includes/Source/footer.php");
        }
    }
	// MdScore 1.0
?>