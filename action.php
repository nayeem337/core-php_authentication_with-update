<?php
require_once 'vendor/autoload.php';
use App\classes\Auth;
use App\classes\User;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'about')
    {
        include "pages/about.php";
    }
    elseif ($_GET['page'] == 'contact')
    {
        include "pages/contact.php";
    }
    elseif ($_GET['page'] == 'login')
    {
        include "pages/login.php";
    }
    elseif ($_GET['page'] == 'new-login')
    {
        $auth = new Auth($_POST);
        $auth->login();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}