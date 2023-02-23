<?php
require_once 'vendor/autoload.php';

use App\classes\FullName;



if (isset($_GET['page']))
{

    if ($_GET['page'] == 'home')
    {

        include 'pages/Home.php';
    }

    elseif ($_GET['page'] == 'get-full-name')
    {

        $fulName= new \App\classes\FullName($_POST);
        $result = $fulName->index();

        include 'pages/Home.php';
    }

}


