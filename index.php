<?php 

require_once './src/controller/controller.php';

$my_error_handler = function (int $errno, string $errmsg, string $errfile, int $errline)
{
    switch ($errno)
    {
        case E_USER_WARNING:
            echo $errmsg;
            break;
        
    }
};

set_error_handler ($my_error_handler);

$page ='';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

getPage($page);