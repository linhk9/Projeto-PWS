<?php
    require_once './startup/boot.php';
    require_once './controllers/BaseController.php';
    require_once './controllers/BaseAuthController.php';
    require_once './controllers/SiteController.php';
    require_once './controllers/LoginController.php';
    require_once './controllers/FaturaController.php';
    require_once './controllers/UserController.php';
    require_once './controllers/RegisterController.php';

    if(!isset($_GET['c'], $_GET['a']))
    {
        // omissão, enviar para site
        $controller = new SiteController();
        $controller->index();
    }
    else
    {
        // existem parametros definidos
        $c = $_GET['c'];
        $a = $_GET['a'];

        switch ($c)
        {
            case "login":
                $controller = new LoginController();
                switch ($a)
                {
                    case "index":
                        $controller->index();
                        break;

                    case "login":
                        $controller->login();
                        break;

                    case "logout":
                        $controller->logout();
                }
                break;
            case 'register':
                $controller = new RegisterController();
                switch ($a)
                {
                    case "index":
                        $controller->index();
                        break;
                    case 'register':
                        $controller->register();
                        break;
                }
                break;

            case "fatura":
                $controller = new FaturaController();
                switch ($a)
                {
                    case "index":
                        $controller->index();
                        break;
                }
                break;

            case "user":
                $controller = new UserController();
                switch ($a)
                {
                    case "index":
                        $controller->index();
                        break;
                    case "destroy":
                        $controller->delete($_GET['id']);
                        break;
                    case "update":
                        $controller->update($_GET['id']);
                        break;
                }
                break;

            case "site":
                $controller = new SiteController();
                $controller->index();
                break;

            default:
                $controller = new SiteController();
                $controller->index();
        }
    }