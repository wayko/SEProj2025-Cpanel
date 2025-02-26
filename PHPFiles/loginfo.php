<?php


    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
    {
        header("location:/~cpanel-username/SEProj2025-Milestone/");

    }
    else
    {
		echo "<div style='padding-left: 10px;'>"; 
		echo "Name: " . htmlspecialchars($_SESSION['adminUN']) . "<br/>";
		echo "Email: " . htmlspecialchars($_SESSION['Email']);
	}
?>