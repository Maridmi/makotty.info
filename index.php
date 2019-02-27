<?php
	switch ($_SERVER['REQUEST_URI']){
    	case '/':
        	require_once 'docs/main.php';
        	break;

        case '/portfolio':
            require_once 'docs/portfolio.php';
            break;

        case '/nikitakyznetsov':
            require_once 'docs/nikita.php';
            break;

        case '/altpravo':
            require_once 'docs/altpravo.php';
            break;

        case '/makotty':
            require_once 'docs/makotty.php';
            break;

        case '/form';
            require_once 'form.php';
            break;

        default:
        	require_once 'docs/errors/404.html';
	}
?>