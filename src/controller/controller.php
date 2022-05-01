<?php

function getPage($page)
{
    switch ($page) {
        case 'dashboard':
            require __DIR__ . '/../templates/dashboard.php';
            break;
        case 'contact':
            require __DIR__ . '/../templates/contact.php';
            break;
        case 'topics':
            require __DIR__ . '/../templates/topics.php';
            break;
        default:
            require __DIR__ . '/../templates/home.php';
            break;
    }
}